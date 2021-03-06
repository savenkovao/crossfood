(function ($) {
    /* Common */

    if (window.CONFIG.page == undefined) {
        window.CONFIG.page = "";
    }

    /* Common */

    $(document).ready(function () {
        window.POSTS = {};
        window.FIRST_LOAD = false;

        function getTarget(event) {
            var target = event.target;
            var currentTarget = event.currentTarget;

            while (target !== event.currentTarget) {
                if (target.hasAttribute("data-meta-node")) {
                    var e = { target: target, currentTarget: currentTarget };

                    return e;
                }

                target = target.parentNode; // переход по иерархии на узел выше (от ребенка к родителю)
            }

            return;
        }

        // cuisine switching
        var APP_CALORIES = window.CONFIG.calories || {};
        var APP_SUBSCRIBE_TYPES = window.CONFIG.subscribeTypes || {};

        var cuisineListener = {
            subscribe: "stand",
            week: 1,
            calories: APP_CALORIES.normal.label || "normal",
            day: "mo",
            cuisines: 5,
            price: "280/320",
            selector: "",
        };

        if (window.CONFIG.page === "home") {
            var subscribe = document.getElementById("subscribe");
            var subscribeItems = document.getElementById("subscribe-items");
            var cuisineWeek = document.getElementById("cuisine-week");
            // var cuisines_3_5 = document.getElementById('cuisines_3_5');
            var allCuisines = document.getElementById("all-cuisines");

            if (subscribe) {
                subscribe.addEventListener("click", setSubscribe, false);
                subscribeItems.addEventListener(
                    "click",
                    setSubscribeItems,
                    false
                );
                cuisineWeek.addEventListener("click", setCuisineWeek, false);
                // cuisines_3_5.addEventListener('click', setCuisines_3_5, false);
            }

            function setSubscribe(event) {
                enableBlock(event);
            }

            function setSubscribeItems(event) {
                enableBlock(event);
            }

            function setCuisineWeek(event) {
                enableBlock(event);
            }

            getStartCuisine();

            function getStartCuisine() {
                setCurrentWeek();
                selectCuisineItem();
            }
        }

        function setCurrentWeek() {
            var date = new Date();

            Date.prototype.getWeekNumber = function () {
                var d = new Date(+this);
                d.setHours(0, 0, 0, 0);
                d.setDate(d.getDate() + 4 - (d.getDay() || 7));
                return Math.ceil(
                    ((d - new Date(d.getFullYear(), 0, 1)) / 8.64e7 + 1) / 7
                );
            };

            var weekNumber = date.getWeekNumber();
            var dayNumber = date.getDay();
            var hourNumber = date.getHours();

            cuisineListener.week = getSubscribeWeek(
                weekNumber,
                dayNumber,
                hourNumber
            );
        }

        function getSubscribeWeek(weekNumber, dayNumber, hourNumber) {
            var config = window.CONFIG.weekConfig;
            var weeksCount = config && config.quantity;
            var startWeekNumber = config && config.start;
            var week = cuisineListener.week;

            if (weeksCount && startWeekNumber) {
                if (dayNumber === 0 && hourNumber >= 12) weekNumber++;

                var rest = weekNumber % weeksCount;

                var preCalc = (rest + startWeekNumber - 1) % weeksCount;

                week = preCalc || weeksCount;
            }

            return !week || week > weeksCount || week <= 0 ? 1 : week;
        }

        function enableBlock(event) {
            var e = getTarget(event);
            if (e !== undefined) {
                var dataAction = e.target.getAttribute("data-action");
                var dataIdentifier = e.target.getAttribute("data-identifier");

                highlight(e.target);

                searchByAttribute(dataAction, dataIdentifier, e.target);

                changeListener(dataIdentifier, e);
            }
        }

        function searchByAttribute(action, identifier, target) {
            var nodes = document.querySelectorAll("[" + action + "]");

            if (action === "data-subscribe") {
                $(nodes).hide();
                $('[data-subscribe="' + identifier + '"]').fadeIn(function () {
                    $(".subscribe__item>p").addClass("animated zoomIn");
                });
            } else {
                for (var i = 0; i < nodes.length; i++) {
                    var currentIdentifier = nodes[i].getAttribute(action);

                    if (currentIdentifier === identifier) {
                        nodes[i].classList.remove("disable");
                    } else {
                        nodes[i].classList.add("disable");
                    }
                }
            }
        }

        function changeListener(identifier, event) {
            if (window.CONFIG.page === "home") {
                if (event.currentTarget === subscribe) {
                    cuisineListener.subscribe = identifier;

                    if (identifier !== "trial") {
                        cuisineListener.calories = APP_CALORIES.normal.label;
                    }

                    setCurrentWeek();

                    checkHighLightedItem();
                } else if (event.currentTarget === subscribeItems) {
                    if (identifier) cuisineListener.calories = identifier;
                } else if (event.currentTarget === cuisineWeek) {
                    cuisineListener.day = identifier;
                }

                selectCuisineItem();
            }
        }

        function selectCuisineItem(callback, customSelector) {
            var selector =
                cuisineListener.subscribe +
                "-" +
                cuisineListener.week +
                "-" +
                cuisineListener.calories +
                "-" +
                cuisineListener.day;

            var categorySelector =
                cuisineListener.subscribe +
                "-" +
                cuisineListener.week +
                "-" +
                cuisineListener.day;

            if (customSelector) {
                categorySelector = customSelector;
            }

            if (!window.POSTS[categorySelector]) {
                // с версии 2.8 'ajaxurl' всегда определен в админке
                var data = {
                    action: "hello",
                    name: categorySelector,
                };

                if (window.FIRST_LOAD) {
                    showLoader("body");
                }

                window.FIRST_LOAD = true;

                jQuery.post(myPlugin.ajaxurl, data, function (response) {
                    if (response) {
                        var posts = JSON.parse(response);

                        posts.forEach(function (item, i, arr) {
                            var postItem = $(
                                '<div class="tab-block__tab-item disable"><div class="cuisine__item-text-cont"></div></div>'
                            );
                            var postWrapper = $(
                                '<div class="cuisine__item"></div>'
                            );

                            postWrapper.html(item.post_content);

                            postItem.html(postWrapper);
                            postItem.attr("id", item.post_title);

                            $("#all-cuisines").append(postItem);
                            removeImgAttribures();
                        });

                        window.POSTS[categorySelector] = true;

                        switchCuisineItems(selector);
                    }

                    if (callback) {
                        callback();
                    }

                    hideLoader("body");
                });
            } else {
                switchCuisineItems(selector);
                if (callback) {
                    callback();
                }
                hideLoader("body");
            }
        }

        function switchCuisineItems(selector) {
            var currentItem = document.getElementById(selector);

            console.log(selector);

            cuisineListener.price = $(
                "#" +
                    selector +
                    " .cuisine__item-price-text" +
                    "[data-cuisine-qount = 5]"
            ).html();
            cuisineListener.selector = selector;
            // cuisineListener.cuisines

            if (currentItem) {
                for (var i = 0; i < allCuisines.children.length; i++) {
                    allCuisines.children[i].classList.add("disable");
                }

                currentItem.classList.remove("disable");
            }
        }

        function checkHighLightedItem() {
            var items = subscribeItems.querySelectorAll(
                "[" + "data-identifier" + "]"
            );

            for (var i = 0; i < items.length; i++) {
                var itemIdentifier = items[i].getAttribute("data-identifier");

                if (cuisineListener.calories === itemIdentifier) {
                    highlight(items[i]);
                }
            }
        }

        function highlight(object) {
            for (var i = 0; i < object.parentNode.children.length; i++) {
                object.parentNode.children[i].classList.remove("active");
            }
            object.classList.add("active");
        }

        var currentScreenWidth;
        var previousScreenWidth = getScreenWidth();

        function getScreenWidth() {
            currentScreenWidth = document.documentElement.clientWidth;
            return currentScreenWidth;
        }

        document.body.addEventListener("click", switchNode, false);

        function switchNode(event) {
            var e = getTarget(event);

            if (e !== undefined) {
                var target = e.target;
                var action = target.getAttribute("data-action");
                var targetNodeSelector = target.getAttribute("data-target");
                var targetNode = document.getElementById(targetNodeSelector);

                if (targetNode) {
                    if (action === "activate") {
                        activateNode(targetNode);
                    } else if (action === "deactivate") {
                        deactivateNode(targetNode);
                    }
                }
            }
        }

        function activateNode(targetNode) {
            targetNode.classList.add("active");
            selectOptions(targetNode);
        }

        function deactivateNode(targetNode) {
            targetNode.classList.remove("active");
        }

        setSubscribeFormSelectOptions();

        function setSubscribeFormSelectOptions() {
            // Вставка типов подписок в селект формы оформления подписок
            if (APP_SUBSCRIBE_TYPES) {
                var subscribeTypesHtml = "";

                for (var key in APP_SUBSCRIBE_TYPES) {
                    var type = APP_SUBSCRIBE_TYPES[key];

                    if (key === "trial") {
                        continue;
                    }

                    subscribeTypesHtml +=
                        '<option value="' +
                        type.value +
                        '">' +
                        type.label +
                        "</option>";
                }

                $("#form-input_subscribe").html(subscribeTypesHtml);
            }

            // Вставка ККАЛ к в селект формы оформления подписок
            if (APP_CALORIES) {
                var caloriesHtml = "";

                for (var key in APP_CALORIES) {
                    var calory = APP_CALORIES[key];

                    caloriesHtml +=
                        '<option value="' +
                        calory.label +
                        '">' +
                        calory.value +
                        "</option>";
                }

                $("#form-input_calories").html(caloriesHtml);
            }
        }

        // Select options
        $('[data-target="form_2"]').on("click", function () {
            selectOptions();
        });

        function selectOptions() {
            var dataSub = cuisineListener.subscribe || "stand";

            $("#form-input_subscribe").val(APP_SUBSCRIBE_TYPES[dataSub].value);
            $("#form-input_calories").val(cuisineListener.calories);

            setPriceInForm(dataSub, cuisineListener.calories);
        }

        $('[id^="wpcf7-f2087"] form').on("change", function (event) {
            setPriceInForm(
                $("#form-input_subscribe").val(),
                $("#form-input_calories").val()
            );
        });

        function setPriceInForm(subscribe, calories) {
            selectCuisineItem(function () {
                if (subscribe !== "trial") {
                    // cuisineListener.price = $('#' + subscribe + '-' + cuisineListener.week + '-' + calories + '-' + 'mo' + ' .cuisine__item-price-text' + '[data-cuisine-qount = 5]').html();
                    cuisineListener.price = $(
                        "#subscribe-items " +
                            '[data-subscribe="' +
                            subscribe +
                            '"] ' +
                            '[data-identifier="' +
                            calories +
                            '"] .subscribe__price strong'
                    ).html();
                } else if (subscribe === "trial") {
                    cuisineListener.price = $("#" + subscribe).html();
                    cuisineListener.price = window.CONFIG.trialPrice;
                }

                $('input[name="product-name"]').val(cuisineListener.selector);
                $("#form-input_price").val(cuisineListener.price);
            }, "#" + subscribe + "-" + cuisineListener.week + "-mo");
        }

        $("#header-menu").on("click", "a", function (event) {
            var id = $(this).attr("href");

            if (id[0] === "#") {
                event.preventDefault();
                var top = $(id).offset().top;
                $("body,html").animate({ scrollTop: top }, 1500);
            }
        });

        $("#forms").find(".sharedaddy.sd-sharing-enabled").remove();

        $("img").each(function () {
            $(this).removeAttr("height");
            $(this).removeAttr("width");
        });
    });

    $("input[type='tel']").mask("+38 (099) 999 99 99");

    function showLoader(selector) {
        setTimeout(function () {
            if (!$(selector).length) {
                return showLoader("body");
            }

            if ($(selector).css("position") === "static") {
                $(selector).css({ position: "relative" });
            }

            hideLoader(selector);

            $(selector).append(
                '<div class="loader" style="display: none"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>'
            );

            if ($(selector)[0].nodeName === "BODY") {
                $(selector).children(".loader").css({
                    position: "fixed",
                });
            }

            $(selector).children(".loader").fadeIn();
        }, 100);
    }

    function hideLoader(selector) {
        $(selector)
            .children(".loader")
            .fadeOut(function () {
                $(this).remove();
            });
    }

    // Header toggling
    if ($(".how-it-works").length && window.CONFIG.page === "home") {
        toggleHeader();

        $(window).on("scroll", function () {
            toggleHeader();
        });

        function toggleHeader() {
            var $headerMenu = $(".header-menu");

            if ($(window).scrollTop() >= $(".how-it-works").offset().top) {
                $headerMenu.addClass("header-menu_scrolled");
            } else {
                $headerMenu.removeClass("header-menu_scrolled");
            }
        }
    }

    // delete img attributes 'width/height'
    removeImgAttribures();

    function removeImgAttribures() {
        $("img").each(function () {
            $(this).removeAttr("width").removeAttr("height");
        });
    }

    // delete img attributes 'width/height'

    $(".carousel").slick({
        arrows: true,
        prevArrow: '<div class="carousel-arrow left"></div>',
        nextArrow: '<div class="carousel-arrow right"></div>',
    });

    // function initReviewsSilder() {
    var $carousel = $(".carousel-review");

    // if(!$carousel.parent().attr('data-display-show')) {
    //   setTimeout(function () {
    $carousel.slick({
        arrows: true,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: '<div class="carousel-arrow left"></div>',
        nextArrow: '<div class="carousel-arrow right"></div>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: false,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                },
            },
        ],
    });
    // }, 1500);
    // }
    // }

    /* set user-data into forms */
    var userData;
    updateUserDataObj();
    toggleScheduleMessages();

    $(".pum").on("pumAfterOpen", function (e) {
        // $('[data-target^="form_"]').on('click', function (e) {
        var $form = $(".pum-active form");

        if ($form.length) {
            setUserData($form);
        }
    });

    $(".wpcf7-form").on("submit", function (e) {
        var $form = $(e.currentTarget);
        var userInfo = {
            name: $form.find('[name="your-name"]').val() || userData.name || "",
            email:
                $form.find('[name="your-email"]').val() || userData.email || "",
            phone: $form.find('[name="tel-611"]').val() || userData.phone || "",
            address:
                $form.find('[name="your-address"]').val() ||
                userData.address ||
                "",
            time: $form.find('[name="your-time"]').val() || userData.time || "",

            product:
                $('input[name="product-name"]').val() ||
                $("#form-input_sweets").val() ||
                $("#form-input_drinks").val() ||
                "",
            price: $form.find("#form-input_price").val() || 0,
            orderId:
                $('input[name="event_label"]').val() ||
                getUniqueOrderId($form.attr("action").split("-")[1] || "form"),
        };

        localStorage.setItem("userInfo", JSON.stringify(userInfo));

        toggleScheduleMessages();
    });

    function toggleScheduleMessages() {
        var $messages = $("[data-schedule-msg]");
        var periodType = getPeriodType();
        $messages.hide();
        $('[data-schedule-msg="' + periodType + '"]').show();
    }

    /* Grt current schedule period
  Periods:
  * 1 - 00:01 - 11:59 (working day not started)
  * 2 - 12:00 - 19:30 (working hours)
  * 3 - 19:31 - 00:00 (working day finished)
  * */
    function getPeriodType() {
        var date = new Date();
        var time = date.getHours() + date.getMinutes() / 60;

        if (time >= 0 && time < 12) {
            return 1;
        } else if (time >= 12 && time <= 19.5) {
            return 2;
        } else {
            return 3;
        }
    }

    function updateUserDataObj() {
        userData = localStorage.getItem("userInfo")
            ? JSON.parse(localStorage.getItem("userInfo"))
            : {};
    }

    function setUserData($form) {
        updateUserDataObj();

        if (userData) {
            $form.find('[name="your-name"]').val(userData.name);
            $form.find('[name="your-email"]').val(userData.email);
            $form.find('[name="tel-611"]').val(userData.phone);
            $form.find('[name="your-address"]').val(userData.address);
            $form.find('[name="your-time"]').val(userData.time);
        }

        $form
            .find('[name="event_label"]')
            .val(
                getUniqueOrderId($form.attr("action").split("-")[1] || "form")
            );
    }

    function getUniqueOrderId(formEventId) {
        return (
            formEventId +
            "_" +
            (Math.random() * new Date().getTime()).toFixed(0)
        );
    }

    getText();

    function getText() {
        var date = new Date();
        if (date.getHours() > 12) {
            jQuery("#popup-success-content").html(" :) ");
        }
    }

    /* set user-data into forms */

    /* Get ga Client ID from cookies & set to forms */

    function getGAClientId() {
        var tracker = ga.getAll()[0];
        var clientId = tracker.get("clientId") || "";
        localStorage.setItem("gaClientId", clientId);
        $('input[name="ga_client_id"]').val(clientId);
    }

    /* GA script loaded */
    ga(function () {
        getGAClientId();
    });
    /* GA script loaded */
    /* Get ga Client ID from cookies & set to forms */

    /* UTM */
    getUtmParams();

    function getUtmParams() {
        var url_string = location.href;
        var url = new URL(url_string);
        var c = url.searchParams.get("utm_source");

        window.UTM_DATA = {
            utm_source: url.searchParams.get("utm_source") || null,
            utm_medium: url.searchParams.get("utm_medium") || null,
            utm_term: url.searchParams.get("utm_term") || null,
            utm_campaign: url.searchParams.get("utm_campaign") || null,
        };
        var cachedData = localStorage.UTM_DATA
            ? JSON.parse(localStorage.UTM_DATA)
            : null;

        if (cachedData) {
            cachedData.utm_source =
                window.UTM_DATA.utm_source || cachedData.utm_source;
            cachedData.utm_medium =
                window.UTM_DATA.utm_medium || cachedData.utm_medium;
            cachedData.utm_term =
                window.UTM_DATA.utm_term || cachedData.utm_term;
            cachedData.utm_campaign =
                window.UTM_DATA.utm_campaign || cachedData.utm_campaign;
            localStorage.setItem("UTM_DATA", JSON.stringify(cachedData));
        } else {
            localStorage.setItem("UTM_DATA", JSON.stringify(UTM_DATA));
        }
    }

    initUTMFields();

    function initUTMFields() {
        var utmData = JSON.parse(localStorage.UTM_DATA) || window.UTM_DATA;
        if (utmData) {
            $('input[name="utm_source"]').val(utmData.utm_source || null);
            $('input[name="utm_medium"]').val(utmData.utm_medium || null);
            $('input[name="utm_term"]').val(utmData.utm_term || null);
            $('input[name="utm_campaign"]').val(utmData.utm_campaign || null);
            $('input[name="utm_referrer"]').val(document.referrer || null);
        }
    }

    /* UTM */

    /* SPAM PROTECTION */
    $('[name="agree"]').click();

    document.addEventListener(
        "wpcf7mailsent",
        function (event) {
            setTimeout(function () {
                $('[name="agree"]').each(function (i, item) {
                    if (item.checked) item.click();
                });
            }, 500);
        },
        false
    );
    /* SPAM PROTECTION */

    /* Add listeners to contactForm 7 form events */
    $("form.wpcf7-form").on("submit", function (e) {
        showLoader(e.currentTarget);
    });

    $(document).on(
        "wpcf7submit wpcf7mailsent wpcf7invalid wpcf7spam wpcf7mailfailed",
        function (e) {
            hideLoader($(e.target).find("form"));
        }
    );

    /* Add listeners to contactForm 7 form events */

    /* Send fb pixel events */
    $('header [data-target="form_1"]').on("click", function (e) {
        /* Save from trigger */
        window.FB_CONTACT_EVENT = "GetContact1";
        fbq("trackCustom", "Contact1");
    });

    $('footer [data-target="form_1"]').on("click", function (e) {
        /* Save from trigger */
        window.FB_CONTACT_EVENT = "GetContact2";
        fbq("trackCustom", "Contact2");
    });

    $('[data-target="form_2"]').on("click", function (e) {
        fbq("track", "InitiateCheckoutMain");
    });

    $('[data-target="form_3"]').on("click", function (e) {
        fbq("track", "InitiateCheckoutDesserts");
    });

    $('[data-target="form_4"]').on("click", function (e) {
        fbq("track", "InitiateCheckoutDrinks");
    });

    $('[data-target="form_5"]').on("click", function (e) {
        fbq("track", "InitiateCheckoutTrial");
    });
    /* Send fb pixel events */

    /* Page init */
    switch (this.CONFIG.page) {
        case "desserts":
            _initDesserts();
            break;
        case "drinks":
            _initDrinks();
            break;
    }

    /* Page init */

    function _initDesserts() {
        _initDDPage(/*'#wpcf7-f3052-o6', */ 'select[name="menu-230"]');
    }

    function _initDrinks() {
        _initDDPage(/*'#wpcf7-f3143-o5', */ 'select[name="menu-232"]');
    }

    function _initDDPage(menuSelect) {
        var $ddSelect = $(menuSelect);

        $ddSelect.children().remove();

        $(".dd__title").each(function (i, item) {
            $ddSelect.append("<option>" + $(item).text() + "</option>");
        });

        $(".dd__button-cnt").on("click", function () {
            var currentDessert = $(this)
                .closest(".dd__item")
                .find(".dd__title")
                .text();

            $ddSelect.find("option").each(function (i, item) {
                $(item).removeAttr("selected");

                if ($(item).text() === currentDessert) {
                    $(item).attr("selected", true);
                }
            });
        });
    }

    //  Image Lazy loading

    var lazyLoadTimeout = null;
    initLazyLoad();

    $(window).bind("scroll", lazyLoadHandler);

    function lazyLoadHandler() {
        clearTimeout(lazyLoadTimeout);

        lazyLoadTimeout = setTimeout(function () {
            initLazyLoad();
        }, 100);
    }

    function initLazyLoad() {
        var windowTopPosition = $(window)[0].pageYOffset,
            windowBottomPosition =
                $(window)[0].pageYOffset + $(window)[0].innerHeight,
            $items = $("[data-bg-src], [data-src], [data-display]"),
            showOffsets = $(window)[0].innerHeight * 0.5;

        if (!$items.length) {
            $(window).unbind("scroll", lazyLoadHandler);
        }

        if (window.matchMedia("(max-width: 768px)").matches) {
            showOffsets = $(window)[0].innerHeight * 0.75;
        }

        $items.each(function (i, item) {
            if (
                (windowTopPosition - showOffsets <=
                    $(item).offset().top + $(item).height() &&
                    windowTopPosition - showOffsets > $(item).offset().top) ||
                windowBottomPosition + showOffsets >= $(item).offset().top
            ) {
                setSource(item);
            }
        });

        function setSource(item) {
            if (item.hasAttribute("data-bg-src")) {
                $(item).css({
                    "background-image":
                        "url(" + item.getAttribute("data-bg-src") + ")",
                });

                item.removeAttribute("data-bg-src");
                item.setAttribute("data-bg", "");
            } else if (item.hasAttribute("data-display")) {
                $(item)
                    .find("[data-display-show]")
                    .css({
                        display: "block",
                    })
                    .removeAttr("data-display-show")
                    .end()
                    .removeAttr("data-display");

                // initReviewsSilder();
            } else {
                item.setAttribute("src", item.getAttribute("data-src"));

                item.onload = function () {
                    item.removeAttribute("data-src");
                };
            }
        }
    }

    //  Image Lazy loading

    /* Dropdown */
    $(document).on("click", ".dropdown-toggle", function (e) {
        e.preventDefault();
        $(e.target)
            .closest(".dropdown")
            .find(".dropdown-content")
            .slideToggle(function () {
                $(e.target).closest(".dropdown").toggleClass("active");
            });
    });
    /* Dropdown */

    /* Show "Save on desktop" popup (IOS Safari mobile only, second visit)
     * popup id - 9626
     * */
    setVisit();
    displaySaveOnDesktopPopup();

    function displaySaveOnDesktopPopup() {
        if (checkIsSafari() && getVisit() === 1) {
            setTimeout(function () {
                openModal(9626);
            }, 3000);
        }
    }

    function setVisit() {
        var visit = localStorage.getItem("saveOnDesktopPopup") || 0;
        localStorage.setItem("saveOnDesktopPopup", +visit + 1);
    }

    function getVisit() {
        return +localStorage.getItem("saveOnDesktopPopup") - 1;
    }

    function checkIsSafari() {
        var ua = window.navigator ? window.navigator.userAgent : "";
        var iOS = !!ua.match(/iPad/i) || !!ua.match(/iPhone/i);
        var webkit = !!ua.match(/WebKit/i);
        return iOS && webkit && !ua.match(/CriOS/i);
    }

    /* Show "Save on desktop" popup */

    /* Popup service
     * global modals service - window.PUM
     * https://docs.wppopupmaker.com/article/42-popup-maker-jquery-api
     * */
    function openModal(id) {
        if (!id || !window.PUM) return;
        window.PUM.open(id);
    }

    function closeModal(id) {
        if (!id || !window.PUM) return;
        window.PUM.close(id);
    }

    /* Popup service */
})(jQuery);

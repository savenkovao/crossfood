(function ($) {

  /* Common */

  if (window.CONFIG.page == undefined) {
    window.CONFIG.page = '';
  }

  /* Common */


  $(document).ready(function () {
    window.POSTS = {};
    window.FIRST_LOAD = false;
    // Mobile menu enabling

    // var brgrMenu = document.getElementById("brgr-menu");
    var menu = document.getElementById('header-menu');

    // var stick1 = document.getElementById("brgr-menu-stick-1");
    // var stick2 = document.getElementById("brgr-menu-stick-2");
    // var stick3 = document.getElementById("brgr-menu-stick-3");
    // var count = 0;


    // brgrMenu.addEventListener("click", enableBrgrMenu, false);

    //
    // function enableBrgrMenu(event){
    //     var e = getTarget(event);
    //
    //     if (e !== undefined) {
    //         count++;
    //         if(count%2===0) {
    //             deactivateBrgrMenu();
    //
    //         } else {
    //             activateBrgrMenu();
    //
    //         }
    //     }
    // }
    //
    // function activateBrgrMenu(){
    //     menu.style.display = 'block';
    //     stick1.classList.add('stick-1-active');
    //     stick2.classList.add('disable');
    //     stick3.classList.add('stick-3-active');
    //
    // }
    //
    // function deactivateBrgrMenu(){
    //     menu.style.display = '';
    //     stick1.classList.remove('stick-1-active');
    //     stick2.classList.remove('disable');
    //     stick3.classList.remove('stick-3-active');
    //     count = 0;
    // }

    // team slider browsing


    var teamSlider = document.getElementById('team-slider');

    if (teamSlider) {
      teamSlider.addEventListener('click', browseTeamSlider, false);
    }

    function browseTeamSlider(event) {
      var e = getTarget(event);

      if (e !== undefined) browseSlider(e);

    }


    function getTarget(event) {
      var target = event.target;
      var currentTarget = event.currentTarget;

      while (target !== event.currentTarget) {

        if (target.hasAttribute('data-meta-node')) {
          var e = {target: target, currentTarget: currentTarget};

          return e;

        }

        target = target.parentNode; // переход по иерархии на узел выше (от ребенка к родителю)
      }

      return;
    }


    function browseSlider(e) {

      getScreenWidth();

      if (currentScreenWidth >= 768) {

        var target = e.target;
        var currentTarget = e.currentTarget;

        var targetWidth = target.clientWidth;
        var dataAction = target.getAttribute('data-action');
        var allItems = getItems();

        var lItem = teamSlider.querySelectorAll('.l')[0];
        lItem.classList.remove('l');
        target.classList.remove(dataAction);
        target.classList.add('l');
        target.setAttribute('data-action', 'l');

        if (dataAction === 'ml') {

          var newSl = allItems.sr.cloneNode(true);

          newSl.style.marginLeft = (-targetWidth * 1) + 'px';

          newSl.setAttribute('data-action', 'sl');
          newSl.setAttribute('data-meta-node', '');
          newSl.classList.remove('sr');
          newSl.classList.add('sl');

          allItems.sl.setAttribute('data-action', 'ml');
          allItems.sl.classList.remove('sl');
          allItems.sl.classList.add('ml');

          lItem.classList.add('mr');
          lItem.setAttribute('data-action', 'mr');

          allItems.mr.setAttribute('data-action', 'sr');
          allItems.mr.classList.remove('mr');
          allItems.mr.classList.add('sr');


          currentTarget.insertBefore(newSl, currentTarget.firstChild);

          setTimeout(function () {
            newSl.style.marginLeft = 0;

          }, 0);

          setTimeout(function () {
            allItems.sr.remove();
          }, 405);

        } else if (dataAction === 'sl') {

          var newSl = allItems.sr.cloneNode(true);
          var newMl = allItems.mr.cloneNode(true);


          newMl.setAttribute('data-action', 'sl');
          newMl.setAttribute('data-meta-node', '');
          newMl.classList.remove('mr');
          newMl.classList.add('sl');

          newSl.setAttribute('data-action', 'ml');
          newSl.setAttribute('data-meta-node', '');
          newSl.classList.remove('sr');
          newSl.classList.add('ml');


          newMl.style.marginLeft = (-targetWidth * 2) + 'px';
          currentTarget.insertBefore(newSl, currentTarget.firstChild);
          currentTarget.insertBefore(newMl, currentTarget.firstChild);

          lItem.classList.add('sr');
          lItem.setAttribute('data-action', 'sr');

          allItems.ml.setAttribute('data-action', 'mr');
          allItems.ml.classList.remove('ml');
          allItems.ml.classList.add('mr');


          setTimeout(function () {
            newMl.style.marginLeft = 0;

          }, 0);

          setTimeout(function () {
            allItems.sr.remove();
            allItems.mr.remove();
          }, 205);

        } else if (dataAction === 'mr') {

          var newSr = allItems.sl.cloneNode(true);

          newSr.setAttribute('data-action', 'sr');
          newSr.setAttribute('data-meta-node', '');
          newSr.classList.remove('sl');
          newSr.classList.add('sr');

          allItems.sr.setAttribute('data-action', 'mr');
          allItems.sr.classList.remove('sr');
          allItems.sr.classList.add('mr');

          lItem.classList.add('ml');
          lItem.setAttribute('data-action', 'ml');

          allItems.ml.setAttribute('data-action', 'sl');
          allItems.ml.classList.remove('ml');
          allItems.ml.classList.add('sl');


          currentTarget.appendChild(newSr);

          setTimeout(function () {
            allItems.sl.style.marginLeft = (-targetWidth * 1) + 'px';

          }, 0);

          setTimeout(function () {
            allItems.sl.remove();
          }, 300);

        } else if (dataAction === 'sr') {

          var newSr = allItems.ml.cloneNode(true);
          var newMr = allItems.sl.cloneNode(true);

          newSr.setAttribute('data-action', 'sr');
          newSr.setAttribute('data-meta-node', '');
          newSr.classList.remove('ml');
          newSr.classList.add('sr');

          newMr.setAttribute('data-action', 'mr');
          newMr.setAttribute('data-meta-node', '');
          newMr.classList.remove('sl');
          newMr.classList.add('mr');

          allItems.sr.setAttribute('data-action', 'l');
          allItems.sr.classList.remove('sr');
          allItems.sr.classList.add('l');

          allItems.mr.setAttribute('data-action', 'ml');
          allItems.mr.classList.remove('mr');
          allItems.mr.classList.add('ml');

          lItem.classList.add('sl');
          lItem.setAttribute('data-action', 'sl');

          currentTarget.appendChild(newMr);
          currentTarget.appendChild(newSr);

          setTimeout(function () {
            allItems.sl.style.marginLeft = (-targetWidth * 2) + 'px';

          }, 0);

          setTimeout(function () {
            allItems.sl.remove();
            allItems.ml.remove();
          }, 400);

        }
      }
    }


    function getItems() {

      var nodes = teamSlider.querySelectorAll('[data-action]');

      for (var i = 0; i < nodes.length; i++) {
        var current = nodes[i].getAttribute('data-action');

        if (current === 'sl') {

          var sl = nodes[i];

        } else if (current === 'ml') {

          var ml = nodes[i];

        } else if (current === 'mr') {

          var mr = nodes[i];

        } else if (current === 'sr') {

          var sr = nodes[i];

        }
      }

      var items = {sl: sl, ml: ml, mr: mr, sr: sr};

      return items;
    }


    // cuisine switching

    var cuisineListener = {
      subscribe: 'stand',
      week: 2,
      calories: '1200',
      day: 'mo',
      cuisines: 5,
      price: '280/320',
      selector: ''
    };

    if (window.CONFIG.page === 'home') {
      var subscribe = document.getElementById('subscribe');
      var subscribeItems = document.getElementById('subscribe-items');
      var cuisineWeek = document.getElementById('cuisine-week');
      // var cuisines_3_5 = document.getElementById('cuisines_3_5');
      var allCuisines = document.getElementById('all-cuisines');

      if (subscribe) {
        subscribe.addEventListener('click', setSubscribe, false);
        subscribeItems.addEventListener('click', setSubscribeItems, false);
        cuisineWeek.addEventListener('click', setCuisineWeek, false);
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
        getCurrentDate();
        selectCuisineItem();
      }
    }


    function getCurrentDate() {

      var date = new Date();

      Date.prototype.getWeekNumber = function () {
        var d = new Date(+this);
        d.setHours(0, 0, 0, 0);
        d.setDate(d.getDate() + 4 - (d.getDay() || 7));
        return Math.ceil((((d - new Date(d.getFullYear(), 0, 1)) / 8.64e7) + 1) / 7);
      };

      var weekNumber = date.getWeekNumber();
      var dayNumber = date.getDay();
      var hourNumber = date.getHours();

      getWeek(weekNumber, dayNumber, hourNumber);

    }


    function getWeek(weekNumber, dayNumber, hourNumber) {
      // there are 2 weeks - №1 and №2
      var week = weekNumber % 2 === 0 ? 2 : 1;

      if (dayNumber === 0 && hourNumber >= 12) {
        week = (weekNumber + 1) % 2 === 0 ? 2 : 1;
      }

      cuisineListener.week = week;
    }


    function enableBlock(event) {
      var e = getTarget(event);
      if (e !== undefined) {
        var dataAction = e.target.getAttribute('data-action');
        var dataIdentifier = e.target.getAttribute('data-identifier');

        highlight(e.target);

        searchByAttribute(dataAction, dataIdentifier, e.target);

        changeListener(dataIdentifier, e);
      }
    }


    function searchByAttribute(action, identifier, target) {
      var nodes = document.querySelectorAll('[' + action + ']');

      if (action === 'data-subscribe') {

        $(nodes).hide();
        $('[data-subscribe="' + identifier + '"]').fadeIn(function () {
          $('.subscribe__item>p').addClass('animated zoomIn');
        });

      } else {
        for (var i = 0; i < nodes.length; i++) {
          var currentIdentifier = nodes[i].getAttribute(action);

          if (currentIdentifier === identifier) {
            nodes[i].classList.remove('disable');
          } else {
            nodes[i].classList.add('disable');
          }
        }
      }


    }

    function changeListener(identifier, event) {
      if (window.CONFIG.page === 'home') {
        if (event.currentTarget === subscribe) {
          cuisineListener.subscribe = identifier;

          if (identifier === 'fit') {
            cuisineListener.calories = '1200';
          } else if (identifier === 'prem') {
            cuisineListener.calories = '1200';
          } else if (identifier === 'veg') {
            cuisineListener.calories = '1200';
          } else if (identifier === 'stand') {
            cuisineListener.calories = '1200';
          }

          getCurrentDate();


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

      var selector = cuisineListener.subscribe + '-' + cuisineListener.week + '-' + cuisineListener.calories + '-' + cuisineListener.day;
      var categorySelector = cuisineListener.subscribe + '-' + cuisineListener.week + '-' + cuisineListener.day;
      if (customSelector) {
        categorySelector = customSelector;
      }

      if (!window.POSTS[categorySelector]) {
        // с версии 2.8 'ajaxurl' всегда определен в админке
        var data = {
          action: 'hello',
          name: categorySelector
        };

        if (window.FIRST_LOAD) {
          showLoader('body');
        }

        window.FIRST_LOAD = true;

        jQuery.post(myPlugin.ajaxurl, data, function (response) {
          if (response) {

            var posts = JSON.parse(response);

            posts.forEach(function (item, i, arr) {
              var postItem = $('<div class="tab-block__tab-item disable"><div class="cuisine__item-text-cont"></div></div>');
              var postWrapper = $('<div class="cuisine__item"></div>');

              postWrapper.html(item.post_content);

              postItem.html(postWrapper);
              postItem.attr('id', item.post_title);

              $('#all-cuisines').append(postItem);
              removeImgAttribures();
            });

            window.POSTS[categorySelector] = true;

            switchCuisineItems(selector);
          }
          if (callback) {
            callback();
          }
          hideLoader('body');

        });
      } else {
        switchCuisineItems(selector);
        if (callback) {
          callback();
        }
        hideLoader('body');
      }
    }


    function switchCuisineItems(selector) {
      var currentItem = document.getElementById(selector);

      console.log(selector);

      cuisineListener.price = $('#' + selector + ' .cuisine__item-price-text' + '[data-cuisine-qount = 5]').html();
      cuisineListener.selector = selector;
      // cuisineListener.cuisines

      if (currentItem) {

        for (var i = 0; i < allCuisines.children.length; i++) {
          allCuisines.children[i].classList.add('disable');
        }

        currentItem.classList.remove('disable');
      }
    }

    function checkHighLightedItem() {

      var items = subscribeItems.querySelectorAll('[' + 'data-identifier' + ']');

      for (var i = 0; i < items.length; i++) {
        var itemIdentifier = items[i].getAttribute('data-identifier');

        if (cuisineListener.calories === itemIdentifier) {
          highlight(items[i]);
        }
      }
    }

    function highlight(object) {
      for (var i = 0; i < object.parentNode.children.length; i++) {
        object.parentNode.children[i].classList.remove('active');
      }
      object.classList.add('active');
    }


    var currentScreenWidth;
    var previousScreenWidth = getScreenWidth();

    function getScreenWidth() {
      currentScreenWidth = document.documentElement.clientWidth;
      return currentScreenWidth;
    }


    document.body.addEventListener('click', switchNode, false);

    function switchNode(event) {
      var e = getTarget(event);

      if (e !== undefined) {
        var target = e.target;
        var action = target.getAttribute('data-action');
        var targetNodeSelector = target.getAttribute('data-target');
        var targetNode = document.getElementById(targetNodeSelector);

        if (targetNode) {

          if (action === 'activate') {
            activateNode(targetNode);
          } else if (action === 'deactivate') {
            deactivateNode(targetNode);
          }
        }
      }
    }

    function activateNode(targetNode) {
      targetNode.classList.add('active');
      selectOptions(targetNode);
    }

    function deactivateNode(targetNode) {
      targetNode.classList.remove('active');
    }


    // Select options
    $('[data-target="form_2"]').on('click', function () {
      selectOptions();
    });

    function selectOptions() {
      var selectSubscribe = document.getElementById('form-input_subscribe');
      var selectCalories = document.getElementById('form-input_calories');

      var dataSub;
      var dataCal;


      if (cuisineListener.subscribe === 'stand') {
        selectSubscribe.selectedIndex = 0;
        dataSub = 'stand';
      } else if (cuisineListener.subscribe === 'fit') {
        selectSubscribe.selectedIndex = 1;
        dataSub = 'fit';
      } else if (cuisineListener.subscribe === 'prem') {
        selectSubscribe.selectedIndex = 2;
        dataSub = 'prem';
      } else if (cuisineListener.subscribe === 'veg') {
        selectSubscribe.selectedIndex = 3;
        dataSub = 'veg';
      }


      if (cuisineListener.calories === '1200') {
        selectCalories.selectedIndex = 0;
        dataCal = 1200;
      } else if (cuisineListener.calories === '1500') {
        selectCalories.selectedIndex = 1;
        dataCal = 1500;
      } else if (cuisineListener.calories === '2000') {
        selectCalories.selectedIndex = 2;
        dataCal = 2000;
      } else if (cuisineListener.calories === '2500') {
        selectCalories.selectedIndex = 3;
        dataCal = 2500;
      }

      setPriceInForm(dataSub, dataCal);
    }


    $('[id^="wpcf7-f2087"] form').on('change', function (event) {
      // $('#wpcf7-f2087-o7 form').on('change', function (event) {
      var selectSubscribe = document.getElementById('form-input_subscribe').value;
      var selectCalories = document.getElementById('form-input_calories').value;

      if (selectSubscribe === 'Фитнес') {
        selectSubscribe = 'fit';
      } else if (selectSubscribe === 'Премиум') {
        selectSubscribe = 'prem';
      } else if (selectSubscribe === 'Без мяса') {
        selectSubscribe = 'veg';
      } else if (selectSubscribe === 'Стандарт') {
        selectSubscribe = 'stand';
      } else if (selectSubscribe === 'Пробный день') {
        selectSubscribe = 'trial';
      }
      console.log(selectSubscribe, selectCalories);

      setPriceInForm(selectSubscribe, selectCalories);

    });

    function setPriceInForm(subscribe, calories) {

      selectCuisineItem(function () {
        if (subscribe !== 'trial') {
          // cuisineListener.price = $('#' + subscribe + '-' + cuisineListener.week + '-' + calories + '-' + 'mo' + ' .cuisine__item-price-text' + '[data-cuisine-qount = 5]').html();
          cuisineListener.price = $('#subscribe-items ' + '[data-subscribe="' + subscribe + '"] ' + '[data-identifier="' + calories + '"] .subscribe__price strong').html();
        } else if (subscribe === 'trial') {
          cuisineListener.price = $('#' + subscribe).html();
        }

        $('input[name="product-name"]').val(cuisineListener.selector);
        $('#form-input_price').val(cuisineListener.price);
      }, '#' + subscribe + '-' + cuisineListener.week + '-mo');

    }


    $('#header-menu').on('click', 'a', function (event) {
      event.preventDefault();
      var id = $(this).attr('href'),
        top = $(id).offset().top;
      $('body,html').animate({scrollTop: top}, 1500);
    });

    $('#forms').find('.sharedaddy.sd-sharing-enabled').remove();


    $('img').each(function () {
      $(this).removeAttr('height');
      $(this).removeAttr('width');
    });

  });

  $('input[type=\'tel\']').mask('+38 (099) 999 99 99');

  function showLoader(selector) {
    if (!$(selector).length) {
      return showLoader('body');
    }

    if ($(selector).css('position') === 'static') {
      $(selector).css({'position': 'relative'});
    }

    hideLoader(selector);

    $(selector).append('<div class="loader" style="display: none"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>');

    if ($(selector)[0].nodeName === 'BODY') {
      $(selector).children('.loader').css({
        position: 'fixed'
      });
    }

    $(selector).children('.loader').fadeIn();
  }

  function hideLoader(selector) {
    $(selector).children('.loader').fadeOut(function () {
      $(this).remove();
    });
  }


  // Header toggling
  if ($('.how-it-works').length && window.CONFIG.page === 'home') {
    toggleHeader();

    $(window).on('scroll', function () {
      toggleHeader();
    });

    function toggleHeader() {
      var $headerMenu = $('.header-menu');

      if ($(window).scrollTop() >= $('.how-it-works').offset().top) {
        $headerMenu.addClass('header-menu_scrolled');
      } else {
        $headerMenu.removeClass('header-menu_scrolled');
      }
    }
  }

  // delete img attributes 'width/height'
  removeImgAttribures();

  function removeImgAttribures() {
    $('img').each(function () {
      $(this).removeAttr('width').removeAttr('height');
    });
  }

  // delete img attributes 'width/height'


  $('.carousel').slick({
    arrows: true,
    prevArrow: '<div class="carousel-arrow left"></div>',
    nextArrow: '<div class="carousel-arrow right"></div>'
  });


  // function initReviewsSilder() {
  var $carousel = $('.carousel-review');

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
          dots: false

        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false
        }
      }
    ]
  });
  // }, 1500);
  // }
  // }


  /* set user-data into forms */
  var userData;
  updateUserDataObj();
  toggleScheduleMessages();

  $('.pum').on('pumAfterOpen', function (e) {
    // $('[data-target^="form_"]').on('click', function (e) {
    var $form = $('.pum-active form');

    if ($form.length) {
      setUserData($form);
    }
  });

  $('.wpcf7-form').on('submit', function (e) {
    var $form = $(e.currentTarget);
    var userInfo = {
      name: $form.find('[name="your-name"]').val() || userData.name || '',
      email: $form.find('[name="your-email"]').val() || userData.email || '',
      phone: $form.find('[name="tel-611"]').val() || userData.phone || '',
      address: $form.find('[name="your-address"]').val() || userData.address || '',
      time: $form.find('[name="your-time"]').val() || userData.time || '',

      product: $('input[name="product-name"]').val() ||
        $('#form-input_sweets').val() ||
        $('#form-input_drinks').val() || '',
      price: $form.find('#form-input_price').val() || 0
    };
    localStorage.setItem('userInfo', JSON.stringify(userInfo));

    toggleScheduleMessages();
  });

  function toggleScheduleMessages() {
    var $messages = $('[data-schedule-msg]');
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
      return 1
    } else if (time >= 12 && time <= 19.5) {
      return 2
    } else {
      return 3
    }
  }

  function updateUserDataObj() {
    userData = localStorage.getItem('userInfo') ? JSON.parse(localStorage.getItem('userInfo')) : {};
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
  }

  getText();

  function getText() {
    var date = new Date();
    if (date.getHours() > 12) {
      jQuery('#popup-success-content').html(' :) ');
    }
  }

  /* set user-data into forms */

  /* Get ga Client ID from cookies & set to forms */


  function getGAClientId() {
    var tracker = ga.getAll()[0];
    var clientId = tracker.get('clientId') || '';
    localStorage.setItem('gaClientId', clientId);
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
    var c = url.searchParams.get('utm_source');

    window.UTM_DATA = {
      utm_source: url.searchParams.get('utm_source') || null,
      utm_medium: url.searchParams.get('utm_medium') || null,
      utm_term: url.searchParams.get('utm_term') || null,
      utm_campaign: url.searchParams.get('utm_campaign') || null
    };
    var cachedData = localStorage.UTM_DATA ? JSON.parse(localStorage.UTM_DATA) : null;

    if (cachedData) {
      cachedData.utm_source = window.UTM_DATA.utm_source || cachedData.utm_source;
      cachedData.utm_medium = window.UTM_DATA.utm_medium || cachedData.utm_medium;
      cachedData.utm_term = window.UTM_DATA.utm_term || cachedData.utm_term;
      cachedData.utm_campaign = window.UTM_DATA.utm_campaign || cachedData.utm_campaign;
      localStorage.setItem('UTM_DATA', JSON.stringify(cachedData));
    } else {
      localStorage.setItem('UTM_DATA', JSON.stringify(UTM_DATA));
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

  document.addEventListener('wpcf7mailsent', function (event) {
    setTimeout(function () {
      $('[name="agree"]').each(function (i, item) {
        if (item.checked) item.click();
      });
    }, 500);
  }, false);
  /* SPAM PROTECTION */

  /* Add listeners to contactForm 7 form events */
  $('form.wpcf7-form').on('submit', function (e) {
    showLoader(e.currentTarget);
  });

  $(document).on('wpcf7submit wpcf7mailsent wpcf7invalid wpcf7spam wpcf7mailfailed', function (e) {
    hideLoader($(e.target).find('form'));
  });

  /* Add listeners to contactForm 7 form events */

  /* Send fb pixel events */
  $('header [data-target="form_1"]').on('click', function (e) {
    /* Save from trigger */
    window.FB_CONTACT_EVENT = 'GetContact1';
    fbq('trackCustom', 'Contact1');
  });

  $('footer [data-target="form_1"]').on('click', function (e) {
    /* Save from trigger */
    window.FB_CONTACT_EVENT = 'GetContact2';
    fbq('trackCustom', 'Contact2');
  });

  $('[data-target="form_2"]').on('click', function (e) {
    fbq('track', 'InitiateCheckoutMain');
  });

  $('[data-target="form_3"]').on('click', function (e) {
    fbq('track', 'InitiateCheckoutDesserts');
  });

  $('[data-target="form_4"]').on('click', function (e) {
    fbq('track', 'InitiateCheckoutDrinks');
  });

  $('[data-target="form_5"]').on('click', function (e) {
    fbq('track', 'InitiateCheckoutTrial');
  });
  /* Send fb pixel events */


  /* Page init */
  switch (this.CONFIG.page) {
    case 'desserts'                   :
      _initDesserts();
      break;
    case 'drinks'                     :
      _initDrinks();
      break;
  }

  /* Page init */

  function _initDesserts() {
    _initDDPage(/*'#wpcf7-f3052-o6', */'select[name="menu-230"]');
  }

  function _initDrinks() {
    _initDDPage(/*'#wpcf7-f3143-o5', */'select[name="menu-232"]');
  }

  function _initDDPage(menuSelect) {
    var $ddSelect = $(menuSelect);

    $ddSelect.children().remove();

    $('.dd__title').each(function (i, item) {
      $ddSelect.append('<option>' + $(item).text() + '</option>');
    });

    $('.dd__button-cnt').on('click', function () {
      var currentDessert = $(this).closest('.dd__item').find('.dd__title').text();

      $ddSelect.find('option').each(function (i, item) {
        $(item).removeAttr('selected');

        if ($(item).text() === currentDessert) {
          $(item).attr('selected', true);
        }
      });
    });
  }


  //  Image Lazy loading

  var lazyLoadTimeout = null;
  initLazyLoad();


  $(window).bind('scroll', lazyLoadHandler);

  function lazyLoadHandler() {
    clearTimeout(lazyLoadTimeout);

    lazyLoadTimeout = setTimeout(function () {
      initLazyLoad();
    }, 100);
  }

  function initLazyLoad() {
    var windowTopPosition = $(window)[0].pageYOffset,
      windowBottomPosition = $(window)[0].pageYOffset + $(window)[0].innerHeight,
      $items = $('[data-bg-src], [data-src], [data-display]'),
      showOffsets = $(window)[0].innerHeight * 0.5;

    if (!$items.length) {
      $(window).unbind('scroll', lazyLoadHandler);
    }

    if (window.matchMedia('(max-width: 768px)').matches) {
      showOffsets = $(window)[0].innerHeight * 0.75;
    }

    $items.each(function (i, item) {
      if (
        (windowTopPosition - showOffsets <= $(item).offset().top + $(item).height() &&
          windowTopPosition - showOffsets > $(item).offset().top) ||
        windowBottomPosition + showOffsets >= $(item).offset().top
      ) {
        setSource(item);
      }
    });

    function setSource(item) {

      if (item.hasAttribute('data-bg-src')) {
        $(item).css({
          'background-image': 'url(' + item.getAttribute('data-bg-src') + ')'
        });

        item.removeAttribute('data-bg-src');
        item.setAttribute('data-bg', '');
      } else if (item.hasAttribute('data-display')) {
        $(item).find('[data-display-show]').css({
          'display': 'block'
        }).removeAttr('data-display-show').end()
          .removeAttr('data-display');

        // initReviewsSilder();
      } else {
        item.setAttribute('src', item.getAttribute('data-src'));

        item.onload = function () {
          item.removeAttribute('data-src');
        };
      }
    }
  }

  //  Image Lazy loading


  /* Dropdown */
  $(document).on('click', '.dropdown-toggle', function (e) {
    e.preventDefault();
    $(e.target).closest('.dropdown').find('.dropdown-content').slideToggle(function () {

      $(e.target).closest('.dropdown').toggleClass('active');
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
      }, 3000)
    }
  }

  function setVisit() {
    var visit = localStorage.getItem('saveOnDesktopPopup') || 0;
    localStorage.setItem('saveOnDesktopPopup', +visit + 1);
  }

  function getVisit() {
    return +localStorage.getItem('saveOnDesktopPopup') - 1;
  }

  function checkIsSafari() {
    var ua = window.navigator ? window.navigator.userAgent : '';
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
    window.PUM.open(id)
  }

  function closeModal(id) {
    if (!id || !window.PUM) return;
    window.PUM.close(id)
  }

  /* Popup service */

}(jQuery));

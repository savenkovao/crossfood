(function($){
	$(document).ready(function(){

		var teamSlider = document.getElementById('team-slider');

		if (teamSlider) {
			teamSlider.addEventListener('click', browseTeamSlider, false);
		}

		function browseTeamSlider(event) {
			var e = getTarget(event);

			if (e != undefined)	browseSlider(e);

		}


		function getTarget(event) {
			var target = event.target;
			var currentTarget = event.currentTarget;

			while (target != event.currentTarget) {

				if (target.hasAttribute('data-meta-node')) {
					var e = {target: target,
						currentTarget: currentTarget
					};
					// console.log(e);
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

				if (dataAction == 'ml') {

					var newSl = allItems.sr.cloneNode(true);

					newSl.style.marginLeft = (-targetWidth * 1) + 'px';

					newSl.setAttribute('data-action', 'sl');
					newSl.setAttribute('data-meta-node','');
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

					setTimeout( function() {
						newSl.style.marginLeft = 0;

					}, 0);

					setTimeout( function() {
						allItems.sr.remove();
					}, 405);

				} else if (dataAction == 'sl'){

					var newSl = allItems.sr.cloneNode(true);
					var newMl = allItems.mr.cloneNode(true);


					newMl.setAttribute('data-action', 'sl');
					newMl.setAttribute('data-meta-node','');
					newMl.classList.remove('mr');
					newMl.classList.add('sl');

					newSl.setAttribute('data-action', 'ml');
					newSl.setAttribute('data-meta-node','');
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



					setTimeout( function() {
						newMl.style.marginLeft = 0;

					}, 0);

					setTimeout( function() {
						allItems.sr.remove();
						allItems.mr.remove();
					}, 205);

				} else if (dataAction == 'mr'){

					var newSr = allItems.sl.cloneNode(true);

					newSr.setAttribute('data-action', 'sr');
					newSr.setAttribute('data-meta-node','');
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

					setTimeout( function() {
						allItems.sl.style.marginLeft = (-targetWidth * 1) + 'px';

					}, 0);

					setTimeout( function() {
						allItems.sl.remove();
					}, 300);

				} else if (dataAction == 'sr'){

					var newSr = allItems.ml.cloneNode(true);
					var newMr = allItems.sl.cloneNode(true);

					newSr.setAttribute('data-action', 'sr');
					newSr.setAttribute('data-meta-node','');
					newSr.classList.remove('ml');
					newSr.classList.add('sr');

					newMr.setAttribute('data-action', 'mr');
					newMr.setAttribute('data-meta-node','');
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

					setTimeout( function() {
						allItems.sl.style.marginLeft = (-targetWidth * 2) + 'px';

					}, 0);

					setTimeout( function() {
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

				if (current == 'sl') {

					var sl = nodes[i];

				} else if (current == 'ml'){

					var ml = nodes[i];

				} else if (current == 'mr'){

						var mr = nodes[i];

				} else if (current == 'sr'){

					var sr = nodes[i];

				}
			}

			var items = {sl:sl, ml:ml, mr:mr, sr:sr};

			return items;
		}

	// reviewsSlider browsing/opening


		var reviewsSlider = document.getElementById('reviews-slider');

		if (reviewsSlider) {
			var reviewsSliderInner = document.getElementById('reviews-slider-inner');
			var slidesOnPage = reviewsSlider.getAttribute('data-slides-onpage');
			var reviewsSliderNavBtn = document.getElementById('reviews-slider-nav-btn');
			var buttonsQuantity = Math.ceil(reviewsSliderInner.children.length / +slidesOnPage);
			var body = document.querySelectorAll('body')[0];

			var reviewsSliderNavArw = document.getElementById('reviews-slider-nav-arw');

			var sliderInnerWidth;
			var sliderInnerMargin = 0;

			var currentScreenWidth;

			var coordX;
			var coordY;


		createNavButtons();

		reviewsSliderNavBtn.addEventListener('click', btnBrowseSlider, false);
		reviewsSliderNavArw.addEventListener('click', arwBrowseSlider, false);
		reviewsSliderInner.addEventListener('click', openCurrentSlide, false);
		window.addEventListener('resize', resizeFunction, false);

		function btnBrowseSlider(event) {
			browseReviewsSlider(event);
		}

		function arwBrowseSlider(event) {
			browseReviewsSlider(event);
		}

		function openCurrentSlide(event) {
			openSlide(event);
		}

		function resizeFunction() {
			getScreenWidth();

			if ((previousScreenWidth >= 768 && currentScreenWidth >= 768) || (previousScreenWidth < 768 && currentScreenWidth < 768)) {

			} else {
				sliderInnerMargin = 0;

				var sliderBtnFirst = reviewsSliderNavBtn.firstChild;
				highlight (sliderBtnFirst);
				browseSliderInner('','',reviewsSliderInner);
			}

			previousScreenWidth = currentScreenWidth;
		}

		function createNavButtons() {
			var buttons = [];

			for (var i = 0; i < buttonsQuantity; i++) {
				buttons[i] = document.createElement('div');
				buttons[i].classList.add('reviews-slider__button');
				buttons[i].setAttribute('data-button-number', i);
				buttons[i].setAttribute('data-meta-node', '');
				reviewsSliderNavBtn.appendChild(buttons[i]);
			}

			buttons[0].classList.add('active');
		}

		function browseReviewsSlider(event) {

			var e = getTarget(event);

			if (e != undefined) {

					browseSliderInner(e.target, e.currentTarget, reviewsSliderInner);

					highlight (e.target);

			}
		}

		function openSlide(event) {

			getScreenWidth();
			var e = getTarget(event);
			var target = e.target;
			var currentTarget = e.currentTarget;

			coordX = event.clientX;
			coordY = event.clientY;

			if (e !== undefined) {
				if (currentScreenWidth > 768) {
					createNewNode(target, coordX, coordY);
				}
			}
		}

		function createNewNode(target, coordX, coordY) {
			var currentSlideSrc = target.getAttribute('src');
			var currentTagName = target.tagName;
			var nodeContainer = document.createElement('div');
			var node = document.createElement(currentTagName);

			node.setAttribute('src', currentSlideSrc);
			node.classList.add('reviews-slider__opened-item');

			node.style.top = 'calc(' + coordY +'px' + ' - ' + "50%)";
			node.style.left = 'calc(' + coordX +'px' + ' - ' + "50%)";

			nodeContainer.classList.add('reviews-slider__opened-item-cont');
			nodeContainer.setAttribute('id', 'reveiws-open-container');
			nodeContainer.addEventListener('click', removeNode, false);

			window.addEventListener('scroll', removeNode, false);

			nodeContainer.appendChild(node);
			body.appendChild(nodeContainer);

			setTimeout( function() {
				node.classList.add('visible');
				node.style.top ='';
				node.style.left = '';
			}, 0);
		}

		function removeNode(event) {
			var currentTarget;
			var node;

			if (event.type !== 'scroll') {
				currentTarget = event.currentTarget;
			} else {
				currentTarget = document.getElementById('reveiws-open-container');
			}

			node = currentTarget.firstChild;
			node.classList.remove('visible');

			node.style.top = 'calc(' + coordY +'px' + ' - ' + "5%)";
			node.style.left = 'calc(' + coordX +'px' + ' - ' + "5%)";

			setTimeout( function() {
				body.removeChild(currentTarget);
			}, 200);

			window.removeEventListener('scroll', removeNode, false);
		}

		function browseSliderInner(target, currentTarget, slider) {
			var allSlides = reviewsSliderInner.children.length;


			if (currentTarget === reviewsSliderNavBtn) {

				var dataButtonNumber = target.getAttribute('data-button-number');
				var rest = allSlides % slidesOnPage;
				var integer = reviewsSliderInner.children.length/3 - rest;

				// 3.125 - margin left for items

				if(target !== reviewsSliderNavBtn.lastChild) {
					sliderInnerMargin = -dataButtonNumber * (100 + 3.125);
				} else {
					sliderInnerMargin = -(dataButtonNumber - 1 + (rest/slidesOnPage)) * (100 + 3.125);
				}

			} else if (currentTarget === reviewsSliderNavArw) {

				var arrow = target.getAttribute('data-action');

				if (arrow === 'left') {
					sliderInnerMargin += 100;

					if( sliderInnerMargin > 0 ) {
						sliderInnerMargin = 0;
					}

				} else if (arrow === 'right') {
					sliderInnerMargin -= 100;

					if( sliderInnerMargin <= (-allSlides * 100) ) {
						sliderInnerMargin = -(allSlides - 1) * 100;
					}

				}
			}

			slider.children[0].style.marginLeft = sliderInnerMargin + '%';
		}

		function highlight (object) {
			for(var i = 0; i < object.parentNode.children.length;i++){
				object.parentNode.children[i].classList.remove('active');
			}
			object.classList.add('active');
		}

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
					} else if (action === 'deactivate'){
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


		// order form

		var $dessert = $('#form-input_dessert');
		var $allDeserts = $('.desserts__title');
		var $inputPrice100 = $('#form-input_price_100');
		var $inputPrice = $('#form-input_price');
		var $inputWeight = $('#form-input_weight');
        var currentPrice;

        // initialization. Inputs filling

        $inputWeight[0].selectedIndex = 0;
		$dessert.children().remove();

		$allDeserts.each(function(key, value){
			var option = '<option>' + $(value).text() +'</option>';
			$dessert.append( option );
		});


		// Select options

		function selectOptions (targetNode) {
			var selectedDessert;
			var $currentDessert = $('#desserts .item.active .desserts__title').text();

			$('#form-input_dessert option').each(function(key, value) {
				if ($(value).text() === $currentDessert) {
					selectedDessert = $currentDessert;
					$dessert[0].selectedIndex = key;
				}

				currentPrice = $('#desserts .item.active .cuisine__item-price-text span').text();

				$inputPrice100.val(currentPrice);
                setInputPrice();

			});
		}


        $dessert.on('change', function (event) {
            var chosenElem = $dessert.val().trim();

			$allDeserts.each(function(key, value) {
				if ($(value).text().trim() === chosenElem){
					currentPrice = $(value).closest('.desserts__item').find('.cuisine__item-price-text span').text();
					$inputPrice100.val(currentPrice);

                    setInputPrice();
				}
			});
		});

        $inputWeight.on('change', function (event) {
            currentPrice = $inputPrice100.val();
            setInputPrice();
		});

        function setInputPrice() {
            $inputPrice.val( ( ($inputWeight.val()/1000) * (currentPrice*10) ).toFixed(2) );
        }


        // soft scroll

		$("#header-menu").on("click","a", function (event) {
			event.preventDefault();
			var id = $(this).attr('href'),
			top = $(id).offset().top;
			$('body,html').animate({scrollTop: top}, 1500);
		});


        // removing sharing buttons
		$('#forms .sharedaddy.sd-sharing-enabled').remove();


        // removing img attr height/width

        $('img').each(function(){
            $(this).removeAttr('height');
            $(this).removeAttr('width');
        });

	});
}(jQuery));

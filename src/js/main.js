(function(){

	var brgrMenu = document.getElementById("brgr-menu");
	var menu = document.getElementById("header-menu");

	var stick1 = document.getElementById("brgr-menu-stick-1");
	var stick2 = document.getElementById("brgr-menu-stick-2");
	var stick3 = document.getElementById("brgr-menu-stick-3");
	var count = 0;

	brgrMenu.addEventListener("click", activateBrgrMenu, false);



	function activateBrgrMenu(event){
		var target = event.target		

		while (target != target.currentTarget) {

			if (target.hasAttribute('data-meta-node')) {
				count++;

				if(count%2==0) {
					menu.style.display = '';

					stick1.classList.remove('stick-1-active');
					stick2.classList.remove('disable');
					stick3.classList.remove('stick-3-active');

					count = 0;
				} else {
					menu.style.display = 'block';
					stick1.classList.add('stick-1-active');
					stick2.classList.add('disable');
					stick3.classList.add('stick-3-active');
				}

				return;
			}

			target = target.parentNode; // переход по иерархии на узел выше (от ребенка к родителю)
		}	
	}

}());


(function(){
	var teamSlider = document.getElementById('team-slider');

	var currentScreenWidth;


	function getScreenWidth() {
		currentScreenWidth = document.documentElement.clientWidth;
	}


	teamSlider.addEventListener('click', browseTeamSlider, false);

	function browseTeamSlider(event) {
		browseSlider(event);
	}

	function browseSlider(event) {

		getScreenWidth();

		if (currentScreenWidth > 768) {

			var target = event.target;

			while (target != event.currentTarget) {

			if (target.hasAttribute('data-meta-node')) {
				var dataAction = target.getAttribute('data-action');
				console.log(dataAction);

				var currentL = teamSlider.querySelectorAll('.l')[0];
				var dataActionCurrentL = currentL.setAttribute('data-action', dataAction);
				currentL.classList.remove('l');
				currentL.classList.add(dataAction);




				target.classList.remove(dataAction);
				target.dataAction = 'l';
				target.classList.add('l');

				return;
			}

				target = target.parentNode; // переход по иерархии на узел выше (от ребенка к родителю)
			}
		}
	}




}());



(function(){
	var cuisineListener = {
		subscribe: 'fit',
		subItem: 'sl',
		day: 'mo'
	}

	var subscribe = document.getElementById('subscribe');
	var subscribeItems = document.getElementById('subscribe-items');
	var cuisineWeek = document.getElementById('cuisine-week');	
	var cuisines_3_5 = document.getElementById('cuisines_3_5');
	var allCuisines = document.getElementById('all-cuisines');

	subscribe.addEventListener('click', setSubscribe, false);
	subscribeItems.addEventListener('click', setSubscribeItems, false);
	cuisineWeek.addEventListener('click', setCuisineWeek, false);
	cuisines_3_5.addEventListener('click', setCuisines_3_5, false);
	

	function setSubscribe(event) {
		enableBlock(event);
	}

	function setSubscribeItems(event) {
		enableBlock(event);
	}

	function setCuisineWeek(event) {
		enableBlock(event);
	}

	function setCuisines_3_5(event) {
		enableBlock(event);
	}

	function enableBlock(event){
		var target = event.target;

		while (target != event.currentTarget) {

			if (target.hasAttribute('data-meta-node')) { //элемент, по которому кликнули
				var dataAction = target.getAttribute('data-action');
				var dataIdentifier = target.getAttribute('data-identifier');
				var dataHighlight = target.getAttribute('data-highlight');

				highlight (target, dataHighlight);

				searchByAttribute(dataAction, dataIdentifier, target);

				changeListener(dataIdentifier);

				return;
			}

			target = target.parentNode; // переход по иерархии на узел выше (от ребенка к родителю)
		}	
	}


	function highlight (object, modificator) {
		for(var i = 0; i < object.parentNode.children.length;i++){
			object.parentNode.children[i].classList.remove(modificator);
		}
		object.classList.add(modificator);
	}

	function searchByAttribute(action, identifier, target) {
		var nodes = document.querySelectorAll('[' + action + ']');

		for (var i = 0; i < nodes.length; i++) {
			var currentIdentifier = nodes[i].getAttribute(action);
			if(currentIdentifier == identifier) {
				nodes[i].classList.remove('disable');
			} else {
				nodes[i].classList.add('disable');
			}
		}	
	}

	function changeListener(identifier) {
		if(event.currentTarget == subscribe) {
			cuisineListener.subscribe = identifier;

			if (identifier == 'fit') {
				cuisineListener.subItem = 'sl';
			} else if (identifier == 'prem') {
				cuisineListener.subItem = 'reg';
			}

			checkHighLightedItem();

		} else if (event.currentTarget == subscribeItems) {
			cuisineListener.subItem = identifier;
		} else if (event.currentTarget == cuisineWeek) {
			cuisineListener.day = identifier;
		}

		selectCuisineItem();
	}

	function selectCuisineItem() {
		var selector = cuisineListener.subscribe + '-' + cuisineListener.subItem + '-' + cuisineListener.day;
		console.log(selector);

		for(var i = 0; i < allCuisines.children.length; i++) {
			allCuisines.children[i].classList.add('disable');
		}

		var currentItem = document.getElementById(selector);
		currentItem.classList.remove('disable');
	}


	function checkHighLightedItem() {

		var items = subscribeItems.querySelectorAll('[' + 'data-identifier' + ']');

		for (var i = 0; i < items.length; i++) {
			var itemIdentifier = items[i].getAttribute('data-identifier');
			var itemModificator = items[i].getAttribute('data-highlight');
			
			if (cuisineListener.subItem == itemIdentifier) {
				highlight (items[i], itemModificator);
			}
		}		
	}

}());




(function(){
	var reviewsSlider = document.getElementById('reviews-slider');
	var reviewsSliderInner = document.getElementById('reviews-slider-inner');
	var slidesOnPage = reviewsSlider.getAttribute('data-slides-onpage');
	var reviewsSliderNavBtn = document.getElementById('reviews-slider-nav-btn');
	var buttonsQuantity = Math.ceil(reviewsSliderInner.children.length / +slidesOnPage);


	var reviewsSliderNavArw = document.getElementById('reviews-slider-nav-arw');

	var sliderInnerWidth;
	var sliderInnerMargin = 0;


	createNavButtons();
	

	reviewsSliderNavBtn.addEventListener('click', btnBrowseSlider, false);
	reviewsSliderNavArw.addEventListener('click', arwBrowseSlider, false);
	window.addEventListener('resize', resizeFunction, false);


	function btnBrowseSlider(event) {
		browseSlider(event);
	}

	function arwBrowseSlider(event) {
		browseSlider(event);
	}

	function resizeFunction() {
		sliderInnerMargin = 0;

		var sliderBtnFirst = reviewsSliderNavBtn.firstChild;
		var modificator = sliderBtnFirst.getAttribute('data-highlight');
		highlight (sliderBtnFirst, modificator);
		browseSliderInner('','',reviewsSliderInner);
	}


	function createNavButtons() {
		var buttons = [];

		for (var i = 0; i < buttonsQuantity; i++) {
			buttons[i] = document.createElement('div');
			buttons[i].classList.add('reviews-slider__button');			
			buttons[i].setAttribute('data-button-number', i);
			buttons[i].setAttribute('data-meta-node', '');
			buttons[i].setAttribute('data-highlight', 'reviews-slider__button_active');
			reviewsSliderNavBtn.appendChild(buttons[i]);
		}

		buttons[0].classList.add('reviews-slider__button_active');
	}

	function getInnerWidth() {
		sliderInnerWidth = reviewsSliderInner.clientWidth;
	}

	function browseSlider(event) {
		getInnerWidth();

		var target = event.target;
		var currentTarget = event.currentTarget

		while (target != event.currentTarget) {

			if (target.hasAttribute('data-meta-node')) { //элемент, по которому кликнули
				var dataHighlight = target.getAttribute('data-highlight');

				browseSliderInner(target, currentTarget, reviewsSliderInner);

				highlight (target, dataHighlight);

				return;
			}
			
			target = target.parentNode; // переход по иерархии на узел выше (от ребенка к родителю)
		}	
	}



	function browseSliderInner(target, currentTarget, slider) {
		var allSlides = reviewsSliderInner.children.length;


		if (currentTarget == reviewsSliderNavBtn) {

			var dataButtonNumber = target.getAttribute('data-button-number');
			var rest = allSlides % slidesOnPage;
			var integer = reviewsSliderInner.children.length/3 - rest;			

			if(target != reviewsSliderNavBtn.lastChild) {
				sliderInnerMargin = -dataButtonNumber * (100 + 3.125);
			} else {
				sliderInnerMargin = -(dataButtonNumber - 1 + (rest/slidesOnPage)) * (100 + 3.125);
			}

		} else if (currentTarget == reviewsSliderNavArw) {

			var arrow = target.getAttribute('data-action');

			if (arrow == 'left') {
				sliderInnerMargin += 100;

				if( sliderInnerMargin > 0 ) {
					sliderInnerMargin = 0;
				}

			} else if (arrow == 'right') {
				sliderInnerMargin -= 100;

				if( sliderInnerMargin <= (-allSlides * 100) ) {
					sliderInnerMargin = -(allSlides - 1) * 100;
				}
				
			}
		}

		slider.children[0].style.marginLeft = sliderInnerMargin + '%';
	}



	function highlight (object, modificator) {
		for(var i = 0; i < object.parentNode.children.length;i++){
			object.parentNode.children[i].classList.remove(modificator);
		}
		object.classList.add(modificator);
	}

}());
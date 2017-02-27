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

	teamSlider.addEventListener('click', browseTeamSlider, false);

	function browseTeamSlider(event) {
		browseSlider(event);
	}




	function browseSlider(event) {

		getScreenWidth();

		if (currentScreenWidth > 768) {

			var target = event.target;
			var currentTarget = event.currentTarget;
			var targetWidth = target.clientWidth;

			while (target != event.currentTarget) {

				if (target.hasAttribute('data-meta-node')) {
					var dataAction = target.getAttribute('data-action');
					
					var allItems = getItems();

					var lItem = teamSlider.querySelectorAll('.l')[0];
					lItem.classList.remove('l');

					target.classList.remove(dataAction);
					target.classList.add('l');
					target.setAttribute('data-action', 'l');

					if (dataAction == 'ml') {
						
						var newSl = allItems.sr.cloneNode(true);
						
						newSl.style.marginLeft = (-targetWidth * 1*(100/70)) + 'px';
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
						}, 200);


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


						newMl.style.marginLeft = (-targetWidth * 2*(100/70)) + 'px';
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
						}, 200);

						

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
							allItems.sl.style.marginLeft = (-targetWidth * 1*(100/70)) + 'px';
							
						}, 0);

						setTimeout( function() {
							allItems.sl.remove();
						}, 200);
						
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
							allItems.sl.style.marginLeft = (-targetWidth * 1*(100/70)) + 'px';
							
						}, 0);

						setTimeout( function() {
							allItems.sl.remove();
							allItems.ml.remove();
						}, 200);
						
					}


					return;
				}

				target = target.parentNode; // переход по иерархии на узел выше (от ребенка к родителю)
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

		var items = {sl, ml, mr, sr};

		return items;
	}



	function getScreenWidth() {
		currentScreenWidth = document.documentElement.clientWidth;
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
	var body = document.querySelectorAll('body')[0];

	var reviewsSliderNavArw = document.getElementById('reviews-slider-nav-arw');

	var sliderInnerWidth;
	var sliderInnerMargin = 0;

	var currentScreenWidth;




	createNavButtons();
	

	reviewsSliderNavBtn.addEventListener('click', btnBrowseSlider, false);
	reviewsSliderNavArw.addEventListener('click', arwBrowseSlider, false);
	reviewsSliderInner.addEventListener('click', openCurrentSlide, false);
	window.addEventListener('resize', resizeFunction, false);


	function btnBrowseSlider(event) {
		browseSlider(event);
	}

	function arwBrowseSlider(event) {
		browseSlider(event);
	}

	function openCurrentSlide(event) {
		openSlide(event);
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


	function browseSlider(event) {

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

	function openSlide(event) {
		getScreenWidth();
		var target = event.target;
		var currentTarget = event.currentTarget

		while (target != event.currentTarget) {
		if (target.hasAttribute('data-meta-node')) {

			if (currentScreenWidth > 768) {
				createNewNode(target);
			}

				return;
			}
			
			target = target.parentNode; // переход по иерархии на узел выше (от ребенка к родителю)
		}	
	}


	function createNewNode(target) {
		var currentSlideSrc = target.getAttribute('src'); 
		var currentTagName = target.tagName; 
		var nodeContainer = document.createElement('div');
		var node = document.createElement(currentTagName);

		node.setAttribute('src', currentSlideSrc);
		node.classList.add('reviews-slider__opened-item');

		nodeContainer.classList.add('reviews-slider__opened-item-cont');
		nodeContainer.setAttribute('id', 'reveiws-open-container');
		nodeContainer.addEventListener('click', removeNode, false);

		window.addEventListener('scroll', removeNode, false);

		nodeContainer.appendChild(node);
		body.appendChild(nodeContainer);

		setTimeout( function() {
			node.classList.add('visible');
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

		setTimeout( function() {
			body.removeChild(currentTarget);
		}, 200);

		window.removeEventListener('scroll', removeNode, false);
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

	function getScreenWidth() {
		currentScreenWidth = document.documentElement.clientWidth;
	}

}());
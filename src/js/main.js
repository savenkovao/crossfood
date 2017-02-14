(function(){
	console.log();
	var subscribeBlockNavigation = document.getElementById('subscribe-block__navigation');
	var selectedSubscribeButton = document.querySelectorAll('.subscribe__nav-button_active')[0];

	var cuisineBlockNavigation = document.getElementById('cuisine-block__navigation');
	var selectedCuisineButton = document.querySelectorAll('.cuisine-block__button_active')[0];

	var cuisineQuantityNavigation = document.getElementById('tab-block__3-5-cuisines');
	var selectedcuisineQuantity = document.querySelectorAll('.tab-block__3-5-cuisines_active')[0];
	

	var selectedSubscribeClass = 'subscribe__nav-button_active';
	var selectedCuisineClass = 'cuisine-block__button_active';
	var selectedcuisineQuantityClass = 'tab-block__3-5-cuisines_active';

	subscribeBlockNavigation.addEventListener("click", highlightTabButton, false);
	cuisineBlockNavigation.addEventListener("click", highlightTabButton, false);
	cuisineQuantityNavigation.addEventListener("click", highlightTabButton, false);

	subscribeBlockNavigation.addEventListener("click", chooseAction, false);
	cuisineQuantityNavigation.addEventListener("click", chooseAction, false);
	cuisineBlockNavigation.addEventListener("click", chooseAction, false);
	

	function highlightTabButton(event){
		var target = event.target;
		if (target != event.currentTarget){
			if (event.currentTarget == subscribeBlockNavigation) {
				selectedSubscribeButton = highlight(target, selectedSubscribeButton, selectedSubscribeClass);
			} else if(event.currentTarget == cuisineBlockNavigation){
				selectedCuisineButton = highlight(target, selectedCuisineButton, selectedCuisineClass);
			} else if(event.currentTarget == cuisineQuantityNavigation){
				selectedcuisineQuantity = highlight(target, selectedcuisineQuantity, selectedcuisineQuantityClass);
			};			
		}		
	}


	function highlight(currentNode, previousNode, modificator){
		if (previousNode) {
			previousNode.classList.remove(modificator);
		}
		previousNode = currentNode;
  	previousNode.classList.add(modificator);

  	return previousNode;
	}

	function chooseAction() {
		var target = event.target;
		if (target != event.currentTarget){
			enableBlock(target);
		}
	}

	function enableBlock(node) {
		var action = node.getAttribute("data-action");
		var enablingBlock = document.getElementById(action);
		var parentBlock;

		if(!enablingBlock) {
			enablingBlock = searchNodes(action);

			for(var i = 0; i < enablingBlock.length; i++){				
				var sibling = enablingBlock[i].previousElementSibling || enablingBlock[i].nextElementSibling;
				sibling.classList.add('disable');
				enablingBlock[i].classList.remove('disable');
			}			

			return;
		}

		parentBlock = enablingBlock.parentElement;	

		for (var i = 0; i < parentBlock.children.length; i++){
			parentBlock.children[i].classList.add('disable');
		}

		enablingBlock.classList.remove('disable');
	}


	function searchNodes(selector){
		var nodes = document.getElementsByClassName(selector);
		return nodes;
	}
	
	


}());


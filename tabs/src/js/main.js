'use strict';

( function() {

  // Общая характеристика
  // Есть 3 показателя, по которым необходимо переключать блоки с меню:
  // 1. подписки, 2. калории, 3. дни недели
  // Принято решение создать объект, в котором будет храниться информация о
  // текущем блоке меню.
  // На все кнопки навешено событие onclick и присвоены ключевые значения
  // (подписки, калории, дни недели)
  // При нажатии происходит изменение свойств объекта-слушателя
  // (путем замены на свойство кликнутого объекта)
  // После иизменения свойст об-слушателя запускаетя ф-ция, формирующая
  // селектор, по которому в html-документе будет найден блок,
  // с соответ. меню. Ему присваивается класс 'active' - 
  // блок отображается в версте
  // Для удобства введены переменные, хранящие в себе ссылки на текущий и предыдущий
  // блокименю


  // объект-слушатель-регистратор событий нажатй на кнопки, содержащий
  // информацию о текущем блоке с меню на день

  var listener = {
    button: 'fitnes',
    calories: '1400',
    day: 'monday'
  }

  //кнопки меню (главные) - первая линия навигации

  var subNavBtn1 = document.getElementById('sb-nv__btn-fit'),
  subNavBtn2 = document.getElementById('sb-nv__btn-prem'),
  subNavBtn3 = document.getElementById('sb-nv__btn-veg');

  subNavBtn1.name = 'fitnes';
  subNavBtn2.name = 'premium';
  subNavBtn3.name = 'vegetarian';

  

  // Блоки соответствующие кнопкам меню - "подписки" Фитнес/Премиум/Вегетарианский 
  // Содержат по 3 блока скалориями 1400/200/2500
  // Вторая линия навигации
  
  var subCnt1 = document.getElementById('sb-cnt-fit'),
  subCnt2 = document.getElementById('sb-cnt-prem'),
  subCnt3 = document.getElementById('sb-cnt-veg');

  var subCnt = [subCnt1, subCnt2, subCnt3];

  // Блоки по калориям 1400/200/2500 в блоке Фитнес
  var subCntFit1 = document.getElementById('sb-nv__fit-1'),
  subCntFit2 = document.getElementById('sb-nv__fit-2'),
  subCntFit3 = document.getElementById('sb-nv__fit-3');

  // Блоки по калориям 1400/200/2500 в блоке Премиум
  var subCntPrem1 = document.getElementById('sb-nv__prem-1'),
  subCntPrem2 = document.getElementById('sb-nv__prem-2'),
  subCntPrem3 = document.getElementById('sb-nv__prem-3');

  // Блоки по калориям 1400/200/2500 в блоке Вегетарианский
  var subCntVeg1 = document.getElementById('sb-nv__veg-1'),
  subCntVeg2 = document.getElementById('sb-nv__veg-2'),
  subCntVeg3 = document.getElementById('sb-nv__veg-3');

  // добавление свойства "калории" в блоки по калориям
  subCntFit1.calories = subCntPrem1.calories = subCntVeg1.calories = 1400;
  subCntFit2.calories = subCntPrem2.calories = subCntVeg2.calories = 2000;
  subCntFit3.calories = subCntPrem3.calories = subCntVeg3.calories = 2500;

  // Кнопки дней недели
  // Третья линия навигации
  var wkMonday = document.getElementById('wk-nv__btn-1'),
  wkTuesday = document.getElementById('wk-nv__btn-2'),
  wkWednesday = document.getElementById('wk-nv__btn-3'),
  wkThursday = document.getElementById('wk-nv__btn-4'),
  wkFriday = document.getElementById('wk-nv__btn-5'),
  wkSaturday = document.getElementById('wk-nv__btn-6'),
  wkSunday = document.getElementById('wk-nv__btn-7');

  wkMonday.day = 'monday';
  wkTuesday.day = 'tuesday';
  wkWednesday.day = 'wednesday';
  wkThursday.day = 'thursday';
  wkFriday.day = 'friday';
  wkSaturday.day = 'saturday';
  wkSunday.day = 'sunday';


  // Объект - текущий блок с меню на день
  var currentDayMenu;

  // Объект - предыдущий блок с меню на день
  var previousDayMenu = document.getElementById('wk-fit-1__bx-1');


// onlcilck событие для 3-х главных кнопок меню

  subNavBtn1.onclick = subNavBtn2.onclick = subNavBtn3.onclick = function() {
    listener.button = this.name; 

    selectSubCnt(); //выбор блока подписок
    selectDayMenu(); //выбор текущего блока с меню на день
  }


// onlcilck событие для блоков подписок (1400/200/2500 - Фит/Прем/Вег)

  subCntFit1.onclick = subCntPrem1.onclick = subCntVeg1.onclick = 
  subCntFit2.onclick = subCntPrem2.onclick = subCntVeg2.onclick = 
  subCntFit3.onclick = subCntPrem3.onclick = function() {
    listener.calories = this.calories;

    selectDayMenu();
  }

// onlcilck событие для кнопок навигации по дням недели

  wkMonday.onclick = wkTuesday.onclick = wkWednesday.onclick = wkThursday.onclick = 
  wkFriday.onclick = wkSaturday.onclick = wkSunday.onclick = function() {
    listener.day = this.day;

    selectDayMenu();
  }

  function selectSubCnt() {
    if (listener.button == 'fitnes') {
      var obj = subCnt1;
    } else if (listener.button == 'premium') {
      var obj = subCnt2;
    } else {      
      var obj = subCnt3;
    }

    removeClassActive(subCnt);
    addClassActive(obj);
  }
  
  function selectDayMenu() {
        
    var selector = 'wk-';

    var sufBttn = selectSufBttn(selector);
    selector = sufBttn;

    var sufCal = selectSufCal(selector);
    selector = sufCal;

    var sufDay = selectSufDay(selector);    
    selector = sufDay;

    currentDayMenu = document.getElementById(selector);
    previousDayMenu.classList.remove('active');
    currentDayMenu.classList.add('active');
    previousDayMenu = currentDayMenu;    
  }

// Ф-ция для определение суффикса селектора по вариантам подписок

  function selectSufBttn(selector) {
    if (listener.button == 'fitnes') {
      selector+='fit-';
    } else if (listener.button == 'premium') {
      selector+='prem-';
    } else {      
     selector+='veg-';
    }
    return selector;    
  }

// Ф-ция для определение суффикса селектора по калориям
  function selectSufCal(selector) {
    if (listener.calories == 1400) {
      selector+='1__';
    } else if (listener.calories == 2000) {
      selector+='2__';
    } else {      
     selector+='3__';
    }
    return selector;
  }

  // Ф-ция для определение суффикса селектора по дням недели

  function selectSufDay(selector) {
    switch (listener.day) {
      case 'monday':
        selector+='bx-1';
        break;
      case 'tuesday':
        selector+='bx-2';
        break;
      case 'wednesday':
        selector+='bx-3';
        break;
      case 'thursday':
        selector+='bx-4';
        break;
      case 'friday':
        selector+='bx-5';
        break;
      case 'saturday':
        selector+='bx-6';
        break;
      case 'sunday':
        selector+='bx-7';
        break;
      default:
        selector+='bx-1';
    }

    return selector;
  }

// Ф-ция для добавления класса 'active'

  function addClassActive(obj) {
    obj.classList.add("active");
  }

// Ф-ция для удаления класса 'active' в массиве объектов

  function removeClassActive(arr) {
    for (var i = 0; i < arr.length; i++){
      arr[i].classList.remove("active");
    }
  }

}() );
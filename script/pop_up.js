(function(){
  // Дані — імена та по одному місту з кожної області + Київ
  const names = [
    "Олена","Андрій","Марина","Сергій","Наталія","Богдан","Ірина","Володимир",
    "Катерина","Юрій","Світлана","Микола","Тетяна","Роман","Христина","Артем",
    "Вікторія","Павло","Галина","Євген","Олександр","Дарина","Максим","Оксана",
    "Ігор","Аліна","Степан","Лілія","Дмитро","Ярослав","Людмила","Зоряна",
    "Василь","Марія","Владислав","Софія","Ганна","Кирило","Юлія","Олеся"
  ];

  // Міста — по одному з кожної області (включно з Києвом)
  const regionCities = [
    "Київ",
    "Львів",            // Львівська обл.
    "Ужгород",          // Закарпатська
    "Луцьк",            // Волинська
    "Рівне",            // Рівненська
    "Тернопіль",        // Тернопільська
    "Івано-Франківськ", // Івано-Франківська
    "Чернівці",         // Чернівецька
    "Хмельницький",     // Хмельницька
    "Житомир",          // Житомирська
    "Вінниця",          // Вінницька
    "Одеса",            // Одеська
    "Миколаїв",         // Миколаївська
    "Херсон",           // Херсонська
    "Кропивницький",    // Кіровоградська
    "Черкаси",          // Черкаська
    "Полтава",          // Полтавська
    "Дніпро",           // Дніпропетровська
    "Запоріжжя",        // Запорізька
    "Харків",           // Харківська
    "Суми",             // Сумська
    "Чернігів",         // Чернігівська
    "Маріуполь",        // Донецька (альтернатива до Донецька)
    "Сєвєродонецьк",    // Луганська (альтернатива)
    "Кам'янець-Подільський" // доп. місто щоб загалом було >24
  ];

  function randomFrom(arr){
    return arr[Math.floor(Math.random() * arr.length)];
  }

  function generateOne(index){
    const name = randomFrom(names);
    const qty = Math.floor(Math.random() * 8) + 1; 
    const city = regionCities[index % regionCities.length]; 
    const variants = [
      `${name} — замовив(ла) ${qty} шт. — ${city}`,
      `Нове замовлення: ${name}, ${city} — ${qty} шт.`,
      `${name} ( ${city} ) — ${qty} шт.`
    ];
    return variants[Math.floor(Math.random()*variants.length)];
  }

  function generateOrders(count = 60){
    const arr = [];
    for(let i=0;i<count;i++){
      arr.push(generateOne(i));
    }
    return arr;
  }

  const popup = document.getElementById('order-popup');
  if(!popup) {
    console.warn('order-popup not found in DOM');
    return;
  }
  const p = popup.querySelector('p');

  const orders = generateOrders(60); 
  let idx = 0;
  let intervalId = null;
  const DISPLAY_MS = 6000; // скільки показуємо одне повідомлення (мс)

  function showOrder(i){
    p.textContent = orders[i];
    // додати клас для анімації
    popup.classList.add('show');
    // через деякий час прибираємо клас (щоб була анімація зникнення перед наступним)
    // але ми прибираємо при оновленні, тому тут лишається
  }

  function hideOrder(){
    popup.classList.remove('show');
  }

  function next(){
    hideOrder();
    // почекаємо крихітну паузу на анімацію зникнення
    setTimeout(()=> {
      idx = (idx + 1) % orders.length;
      showOrder(idx);
    }, 500);
  }

  function startRotation(){
    showOrder(idx);
    intervalId = setInterval(next, DISPLAY_MS);
  }



  startRotation();


})();
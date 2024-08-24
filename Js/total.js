// مسارات الصور اللتي اعلمها
".jpeg"
".jpg"
".png"
".gif" // تدعم الشفافيه
".webp" // لتحل محل الجميع Google تم تطويرها من
// victor graphics الصور الفيكتور
".pdf"
".svg"
".eps"
// صيغ اخري
".psd"
".raw"
".ai"
// https://pandaify.com/Blog/%D9%85%D8%A7-%D9%87%D9%88-%D8%A7%D9%84%D9%81%D8%B1%D9%82-%D8%A8%D9%8A%D9%86-%D8%B5%D9%8A%D8%BA-%D8%A7%D9%84%D8%B5%D9%88%D8%B1-%D8%A7%D9%84%D9%85%D8%AA%D9%86%D9%88%D8%B9%D8%A9-(JPEG-PNG-SVG)-20
// ======================================
// =============== console ==============
// ======================================
// css مثل ال console يمكن تنسيق الخط في ال
console.log(
  "hello from %cjs %cstyle",
  "color: red;font-size: 20px;",
  "color: blue;font-size: 20px;"
);
console.error("error");
console.warn("warning");
console.table(["hassan", "osama", "ali"]);

// ======================================
// =============== Number ===============
// ======================================
console.log(Number.MAX_SAFE_INTEGER);
console.log(Number.MAX_VALUE);
console.log(Number.MIN_SAFE_INTEGER);
console.log(Number.MIN_VALUE);

console.log(Number("100 years old")); // NaN

console.log(Number.isInteger("100")); // false
console.log(Number.isInteger(100.5)); // false
console.log(Number.isInteger(100)); // true

console.log(Number.isNaN("abdalla")); // false
console.log(Number.isNaN(+"abdalla")); // true

// syntactic sugar
console.log(1000000);
console.log(1_000_000);
console.log(1e6);

// حول النص الي رقم
console.log(+"22.3 years old"); // NaN
console.log(parseInt("22.3 years old")); // 22
console.log(parseFloat("22.3 years old")); // 22.3

// حول الرقم الي نص
console.log((100).toString()); // 100
console.log((100.5).toString()); // 100.5
console.log((100.444444).toFixed(2)); // 100.44
console.log((100.555555).toFixed(2)); // 100.56 اقرب عدد صحيح

// ======================================
// ================ Math ================
// ======================================
/* 
Math
  .round()
  .floor()
  .ceil()
  .min()
  .max()
  .pow()
  .random()
  .trunc() [ES6]
*/
console.log(Math.round(10.3)); // 10
console.log(Math.round(10.6)); // 11

console.log(Math.ceil(10.1)); // 11
console.log(Math.floor(10.9)); // 10

console.log(Math.max(10, 20, 30)); // 30
console.log(Math.min(10, 20, 30)); // 10

console.log(Math.pow(2, 4)); // 16 الاس

console.log(Math.random()); // random number

console.log(Math.trunc(10.5)); // يقوم بازاله الكسر ايا كان


// ======================================
// =============== String ===============
// ======================================
/*
  String Methods
    Access With Index
    Access With charAt()
    length
    trim() ازاله المساحات الفارغه
    toUpperCase()
    toLowerCase()
    Chain Methods
*/

var userName = "  Abdalla  ";
console.log(userName);
console.log(userName[2]); // undefined انها لو مش موجوده بترجع charAt الفرق بينها و بين ال
console.log(userName.charAt(2)); // لو مش موجوده مش بترجع حاجه
console.log(userName.length);
console.log(userName.trim());
console.log(userName.toUpperCase());
console.log(userName.toLowerCase());

console.log(userName.trim().charAt(2).toUpperCase());

/*
  String Methods

    indexOf(Value [Mand], Start [Opt] 0)
    lastIndexOf(Value [mand], Start [opt] Length)
    slice(Start [Mand], End [Opt] Not Include End)
    repeat(Times) [ES6]
    split(Separator [opt], Limit [Opt])

    substring()
    substr()
    startswith()
    endswith()
*/

var name = "Abdalla mohamed mansour";

console.log(name.indexOf("mohamed"));
console.log(name.indexOf("o", 10)); // العاشر index ابدا البحث من عند ال
console.log(name.lastIndexOf("o", 5)); // لا تأخذ قيم سالبه
console.log(name.slice(0, 15)); // ياخذ قطعه من الجمله
console.log(name.repeat(2));
console.log(name.split(" ", 2)); // يقطع الجمله


// اذا اخذت قيمه سالبه تبدا من الصفر slice() الفرق بينها و بين ال
console.log(name.substring(-10, 7)); // -> Abdalla تبدا من الصفر
console.log(name.substring(7, -10)); // اذا اخطأت في مكان القيم يقوم بتصحيحها
console.log(name.substring(name.length - 7, name.length - 1)); // طريقه معرفه آخر عنصر

console.log(name.substr(8, 7)); // => "mohamed" length و ينتهي ب index يبدا ب

console.log(name.startsWith("Abd")); // true
console.log(name.startsWith("mo", 8)); // true

console.log(name.endsWith("ur")); // true
console.log(name.endsWith("ed", 15)); // true


// ======================================
// ================ Array ===============
// ======================================
Array.isArray(arrayName);
/*
  Array Methods [Adding and Removing]
    array.unshift() -> add element to the first
    array.push() -> add element to the end
    array.shift() -> remove first element from array و تقوم بتخزين القيمه
    array.pop() -> remove last element from array و تقوم بتخزين القيمه
*/
/*
  البحث في الاراي
  Array
    indexOf(search, index) => بيرجع رقم الاندكس
    lastIndexOf(search, index) => يبحث من الاخر بيرجع رقم الاندكس
    includes() [ES7] => true or false
*/
/*
  Array
    sort() -> array ترتيب ال
    reverse() -> array عكس ترتيب ال
*/
/*
  Array
    slice() -> لا يغير في الاراي الاصليه
    splice(start[index], delete[steps], add[any]) -> يغير في الاراي الاصليه و لا تقوم بتخزين القيمه
*/
/*
  Array
    concat() -> يقوم بجمع اكثر من اراي في اراي واحد و لا يقوم بتغيير الاراي الاصليه
    join() -> يحول الاراي لنص و يمكن فصل العناصر باي علامه
*/


// ======================================
// ================= map ================
// ======================================
// يجب ان تكون اراي
// we want   2  4  6  8
let array = [1, 2, 3, 4];

let testMap = array.map(function (value, index, array) {
  document.write(`Element = ${value} <br>`);
  document.write(`Index = ${index} <br>`);
  document.write(`Array = ${array} <br>`);
  document.write(`This = ${this} <br>`);
}, 10);

// arrow function
let myMap = array.map((e) => e + e);


// ======================================
// =============== filter ===============
// ======================================
// مش بترجعه false و بترجعه و ال true انها بتشوف ال map الفرق بينها و بين ال
// index تقوم بترجيع قيمه ال return === true اذا كان ال
let filter = myNames.filter(function (value, index, array) {
  document.write(`Element = ${value} <br>`);
  document.write(`Index = ${index} <br>`);
  document.write(`Array = ${array} <br>`);
  document.write(`This = ${this} <br>`);
}, 10);


// ======================================
// =============== reduce ===============
// ======================================
// بيرجع قيمه واحده بس مش اراي
let calc = array.reduce(function (acc, value, index, array) {
  // هو اول عنصر في الاراي
  console.log(`Accumulator => ${acc}`);
  // هي القيمه اللتي يتم معالجتها
  console.log(`current element => ${value}`);
  // current "value" الخاص بال index هو ال
  console.log(`current element index => ${index}`);
  console.log(`array => ${array}`);
  console.log(acc + value);
  console.log("-----------------");
  // بشكل صحيح reduce لتعمل ال return يجب عمل
  // بيرجع آخر قيمه
  return acc + value;
// initialValue اذا كانت موجوده تحل محل اول عنصر في الاراي
}, 5);


// ======================================
// =============== Object ===============
// ======================================
let testObject = {
  // [] هذا الاسم غير صالح لكن اذا ارت ان تستخدمه عليك وضعه في ال
  "test name": "name is abdalla",

  sayHallow: function (name = "user") {
    return `hello ${name}`;
  },

  retObject: function () {
    let objectTest = {
      name: "tasnim",
      age: 19,
    };
    return objectTest;
  },
}
// يكتب بهذا الشكل
console.log(testObject["test name"]);
// لكن يجب وضعه ايضا داخل المربع object يمكن عمل متغير باسم عنصر داخل ال
let name = "test name"
console.log(testObject[name]);
/*
  Object.create();
    تقوم بعمل تموزج من الاوبجكت الاصلي ولكن تضعه في البروتوتيب
*/
/*
  Object.assign();
    ياخذ نسخه من اكثر من اوبجيكت و لا تضعه في البروتوتيب
    لكن اذا تم وضع قيمهم كلهم في اوبجيكت موجود مسبقا تتغير قيمته
    لذا تضع {} في الاول
*/


// ======================================
// ================= dom ================
// ======================================
/*
  dom اختصارات للوصول الي العناصر
    title
    body
    images
    forms
    links
*/
/*
  innerHTML
    المجود في الكود كما هو html المجود في العنصر اذا ارت طباعته سيظهر ال html هو ال
  textContent
    المجود في الكود كما هو text المجود في العنصر اذا ارت طباعته سيظهر ال text هو ال
*/
/*
  من العنصر attr الحصول علي ال
    getAttribute(attrName)
    setAttribute(attrName, newValue)
    element.attrName
                  -> dataset.name للحصول علي الداتا
                  -> className للحصول علي الكلاس
*/
/*
  attributes => show all attr
  hasAttribute() => bool
  hasAttributes() => bool
  removeAttribute()
*/
/*
  createElement()
  createComment()
  createTextNode()
  createAttribute()
  setAttributeNode()
  appendChild()
*/
/*
  children => بيرجع جميع العناصر بتوصلها بالاندكس
  childNodes => بيرجع جميع الابناء حتي الكومنت بتوصلها بالاندكس
  firstChild => بيرجع اول ابن
  lastChild => بيرجع اخر ابن
  firstElementChild => بيرجع اول عنصر
  lastElementChild => بيرجع اخر عنصر
*/


// ======================================
// ============== dom event =============
// ======================================
/*
  Events
    onclick
    oncontextmenu
    onmouseenter
    onmouseleave
    onmousemove
    onmousedown
    onmouseup
    onmousewheel => عجله الماوس

    onload
    onscroll
    onresize

    onfocus
    onblur
    onsubmit
*/
/*
  parameterName.preventDefault() => امنع تصرف الايفينت الافتراضي
*/
/*
  محاكاه الاحداث
  Events Simulation
    click()
    focus()
    blur()
*/


// ======================================
// ============ dom classList ===========
// ======================================
/*
  classList
    length => عدد الكلاسس
    value => جميع الكلاسس في نص واحد
    contains() => bool يبحث في مجموعه الكلاسس بيرجع
    item(index) => رجع الكلاس صاحب هذا الاندكس
    add => اضف كلاس
    remove => احذف كلاس
    toggle => لو الكلاس موجود احذفه لو مش موجود ضيفه
*/


// ======================================
// =============== dom css ==============
// ======================================
/*
  style
  cssText
  removeProperty(propertyName) [inline, stylesheet] لايمكن ازاله الخاصيه اذا لم تكن علي العنصر
  setProperty(propertyName, value, priority) Css يضيف الخاصيه علي العنصر و ليس ملف ال
  document.styleSheets[index].rules[index].style.??? الرئيسي Css قم بالتحكم بملف ال
*/


// ======================================
// ============== dom deal ==============
// ======================================
/*
  اضف قبل او بعد او في العنصر
    before() [element || string]
    after() [element || string]
    append() [element || string] بيضيف العنصر في الاخر
    prepend() [element || string] بيضيف العنصر في الاول
  احذف العنصر
    remove()
*/


// ======================================
// =========== dom traversing ===========
// ======================================
/*
  nextSibling -> الاخ التالي ايا كان
  nextElementSibling -> العنصر الاخ التالي
  previousSibling -> الاخ السابق ايا كان
  previousElementSibling -> العنصر الاخ السابق
  parentElement -> الاب لهذا العنصر
*/


// ======================================
// ============= dom cloning ============
// ======================================
/*
  بياخذ نسخه من العنصر الاصلي بس من غير العناصر اللي جوا
    cloneNode()
  بياخذ نسخه من العنصر الاصلي بالعناصر اللي جوا
    cloneNode(true)
*/


// ======================================
// ======== dom addEventListener ========
// ======================================
/*
  addEventListener
    علي عنصر واحد event العاديه انها تقدر تعمل اكتر من event الفرق بينها وبين ال
    و لو فيه خطأ في تنفيذها بينبهك
*/


// ======================================
// ======== Browser Object Model ========
// ======================================
/*
  alert("message")
  confirm("message") => boolean
  prompt("message", "default or placeholder") => الرساله اللي كتبها المستخدم
*/


// ======================================
// =========== bom setTimeout ===========
// ======================================
/*
  setTimeout(function, time, parameters ... )
  clearTimeout(index timeOut)
*/


// ======================================
// =========== bom setInterval ==========
// ======================================
/*
  setInterval(function, time, parameters ...)
  clearInterval(index interval)
*/


// ======================================
// ============ bom location ============
// ======================================
/*
  location
    href => get / set [URL, hash, file, mail]
    host => host + port
    hostname => host
    hash => #str
    protocol => https => "hyper text transfer protocol secured layer"
    reload()
    replace() يقوم بتبديل الدومين ولا يمكنك العوده الي الدومين السابق
    assign() مثل الريبليس لكن يمكن العوده الي الدومين السابق
    pathname => مسار الموقع
*/


// ======================================
// =========== bom open close ===========
// ======================================
/*
  open("url", "target", "window size and position", "history replace")
  close()

  search 
    window.open window features
*/


// ======================================
// ============ bom history =============
// ======================================
/*
  history
    length
    back()
    forward()
    go(delta) => position in history

  search
    pushState() + replaceState()
*/


// ======================================
// ============ bom history =============
// ======================================
/*
  stop() وقف تحميل الصفحه
  focus() ركز علي الويندو
  print() || ctrl + p 
  scrollTo(x, y || {}) => اذهب الي هذه القيمه
  scroll(x, y || {}) مثل الاولي لكن لاتدعم متصفح الماك
  scrollBy(x, y) => اضف علي الاسكرول
*/


// ======================================
// ========== bom localStorage ==========
// ======================================
/*
  localStorage.
    setItem(key, value)
    getItem(key)
    removeItem(key) delete one item
    clear(key) delete all items
    key(index)
    length
*/


// ======================================
// ================ Set() ===============
// ======================================
/*
  بتقوم بازاله المتشابه
  Set(array) data type

  properties
    size() عدد العناصر

  methods
    add() بيضيف
    delete() bool بيحذف و بيرجع
    clear()
    has()
*/

// ======================================
// ============== WeakSet() =============
// ======================================
/*
  Set => can store any data values
  WeakSet => collection of objects only

  Set => have size property
  WeakSet => does not have size property

  Set => have keys, values, entries
  WeakSet => does not have clear, keys, values and entries

  Set => can use forEach
  WeakSet => cannot use forEach
*/


// ======================================
// ================ Map() ===============
// ======================================
/*
  property
    size

  methods
    set()
    get()
    delete()
    has()
    clear()
*/
/*
  Syntax: new Map(iterable with key/value)
    map vs object

      map => does not contain key by default ليس لها قيمه افتراضيه
      object => has default keys

      map => key can be anything [function, object, any primitive data types] تقبل اي نوع بيانات
      object => string or symbol

      map => ordered by insertion الترتيب الصحيح
      object => not 100% till now

      map => get items by size عدد العناصر
      object => need to do manually

      map => better performance when add or remove data اسرع في الحذف او الاضافه
      object => low performance when comparing to map
*/


// ======================================
// ============== WeakMap() =============
// ======================================
/*
  Map() => تعمل مع اي نوع بيانات
  WeakMap() => لا تعمل الا مع الاوبجكت فقت و اذا حذفت قيمه من قيمها فلن تحذف
*/


// ======================================
// ============ Array.from() ============
// ======================================
/*
  Array.from(iterable, mapFunc, this)
    variable
    string numbers
    set
    using the map function
    arrow function
    shorten the method + use arguments
*/


// ======================================
// ========= array.copyWithin() =========
// ======================================
/*
  array.copyWithin(index, start, end)
    من مكان في الاراي copy بتعمل
    لاتغير عدد عناصر الاراي
    بتغير في الاراي الاصليه
*/


// ======================================
// ============ array.some() ============
// ======================================
/*
  array.some(function(value, index, array), this)
  تستخدم في البحث عن عنصر من عناصر الاراي
  boolean بترجع
*/


// ======================================
// ============ array.every() ===========
// ======================================
/*
  true لو لقت كل القيم صح بترجع
  false لو لقت قيمه واحده خطأ بترجع
  array.every(function(value, index, array), this) => boolean
*/
// Object.keys(objectName) بيجيب المفاتيح كلها


// ======================================
// =============== extract ==============
// ======================================
/*
  extract
    ...object or ...array to extract
*/


// ======================================
// ========= Regular Expression =========
// ======================================
/*
  Syntax
  /pattern/modifier(s);
  new RegExp("pattern", "modifier(s)");

  modifiers => flags
    i => case-insensitive
    g => global
    m => multilines

    x => "extended" ignore whitespace تجاهل المسافات
    s => "single line" dot matches newline
    u => "unicode" make quantifiers lazy جعل محددات الكميه كسول
    a => "anchored" anchor to start of pattern, or at the end of the most recent match مرساة لبدء النمط ، أو في نهاية أحدث تطابق
    j => "jchanged" allow duplicate subpattern names السماح بأسماء أنماط فرعية مكررة
    d => "dollar end only" $ matches only end of pattern

  search methods
    match(pattern)
  
  match
    matches a string against a regular expression pattern
    returns an array with the matches
    returns null if no match is found.
*/
/*
  - Part 1
    (X|Y) => X or Y
    [0-9] => 0 to 9
    [^0-9] => any character not 0 to 9
    practice

  - part 2
    [a-z]
    [^a-z]
    [A-Z]
    [^A-Z]
    [abc]
    [^abc]
*/
/*
  Regular Expression
  Character Classes
  . => matches any character
  \w => match word character [a-z, A-Z, 0-9, Underscore _]
  \W => match Non word characters
  \d => match digits from 0 to 9
  \D => match non-digit characters
  \s => match whitespace character
  \S => match non whitespace character
  \b => match at the beginning or end of a word
  \B => match not at the beginning/end of a word

  Test method
  pattern.test(input); => boolean
*/
/*
  Quantifiers
    n+ => one or more موجود مره واحده او اكثر
    n* => zero or one or more غير موجود او موجود مره واحده او اكثر
    n? => zero or one غير موجود او موجود مره واحده

    n{x} => number of قم بتحديد العدد
    n{x,y} => range العدد من و الي
    n{x,} => at least x من الرقم الي الاخر

    $ => النص ينتهي ب
    ^ => النص يبدا ب
    ?= => الكلمه تنتهي ب
    ?! => الكلمه لا تنتهي ب

  replace()
  replaceAll()
*/


// =========================================
// ====== object oriented programming ======
// =========================================
/*
  new syntax
  [ES6]
*/
class User {
  constructor(id, username, salary) {
    this.i = id;
    this.u = username;
    this.s = salary;
    console.log(this);
  }
  // this is method
  methodFunc() {
    return `hello ${this.u}, you'r salary is ${this.s}`;
  } 
}
function User(id, username, salary) {
  this.i = id;
  this.u = username;
  this.s = salary;
  console.log(this); // => User
}
// class هل المستخدم موجود في هذا ال
userOne instanceof User // true
userOne.constructor === User // true
/*
  static
    الاوبجكت اللي اتنشأ مينفعش يأكسس علي القيمه دي لكن الكلاس ينفع
*/
/*
  الوراثه
  extends
  super
*/


// =========================================
// =============== prototype ==== 5 : 20 ===
// =========================================
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
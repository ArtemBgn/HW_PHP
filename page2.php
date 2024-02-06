<h1>Третя сторінка для другого домашнього завдання</h1>
<h1><b>Regex</b></h1>

<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Якоря<i class="material-icons right">more_vert</i></span>
                <table>
                    <tbody>
                    <tr>
                    <td>^</td>
                    <td>початок рядку</td>
                    </tr>
                    <tr>
                    <td>$</td>
                    <td>кінець рядку</td>
                    </tr>
                    <tr>
                    <td>\A</td>
                    <td>початок тексу</td>
                    </tr>
                    <tr>
                    <td>\Z</td>
                    <td>кінець тексту</td>
                    </tr>
                    <tr>
                    <td>\b</td>
                    <td>межа слова</td>
                    </tr>
                    <tr>
                    <td>\B</td>
                    <td>не межа слова</td>
                    </tr>
                    <tr>
                    <td>\<</td>
                    <td>початок слова</td>
                    </tr>
                    <tr>
                    <td>\></td>
                    <td>кінець слова</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Опис Якоря<i class="material-icons right">close</i></span>
                    <p>
                        Якорі в регулярних виразах вказують на початок або кінець чогось. Наприклад, рядки чи слова.
                        Вони є певними символами. Наприклад, шаблон, відповідний рядку, що починається з цифри, повинен мати такий вигляд:<br/> ^[0-9]+
                    </p>
            </div>
        </div>
    </div>
    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Квантифікатори<i class="material-icons right">more_vert</i></span>
                <table>
                    <tbody>
                    <tr>
                    <td>*</td>
                    <td>0 або більше</td>
                    </tr>
                    <tr>
                    <td>*?</td>
                    <td>0 або більше, не жадібний</td>
                    </tr>
                    <tr>
                    <td>+</td>
                    <td>1 або більше</td>
                    </tr>
                    <tr>
                    <td>+?</td>
                    <td>1 або більше, не жадібний</td>
                    </tr>
                    <tr>
                    <td>?</td>
                    <td>0 або 1</td>
                    </tr>
                    <tr>
                    <td>??</td>
                    <td>0 або 1, не жадібний</td>
                    </tr>
                    <tr>
                    <td>{3}</td>
                    <td>рівно 3</td>
                    </tr>
                    <tr>
                    <td>{3,}</td>
                    <td>3 або більше</td>
                    </tr>
                    <tr>
                    <td>{3,5}</td>
                    <td>3, 4 або 5</td>
                    </tr>
                    <tr>
                    <td>{3,5}?</td>
                    <td>3, 4 або 5, не жадібний</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Опис Квантифікатори<i class="material-icons right">close</i></span>
                    <p>
                    Квантифікатори дозволяють визначити частину шаблону, яка має повторюватися кілька разів поспіль.
                    Наприклад, якщо ви хочете з'ясувати, чи містить документ рядок з від 10 до 20 (включно) букв «a», то можна використовувати цей шаблон:<br/>a{10,20}
                    </p>
            </div>
        </div>
    </div>
    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Спецсимволи<i class="material-icons right">more_vert</i></span>
                <table>
                    <tbody>
                    <tr>
                    <td>\</td>
                    <td>екрануючий символ</td>
                    </tr>
                    <tr>
                    <td>\n</td>
                    <td>новий рядок</td>
                    </tr>
                    <tr>
                    <td>\r</td>
                    <td>повернення каретки</td>
                    </tr>
                    <tr>
                    <td>\t</td>
                    <td>табуляція</td>
                    </tr>
                    <tr>
                    <td>\v</td>
                    <td>вертикальна табуляція</td>
                    </tr>
                    <tr>
                    <td>\f</td>
                    <td>нова сторінка</td>
                    </tr>
                    <tr>
                    <td>\a</td>
                    <td>звуковий сигнал</td>
                    </tr>
                    <tr>
                    <td>[\b]</td>
                    <td>повернення на один символ</td>
                    </tr>
                    <tr>
                    <td>\e</td>
                    <td>символ</td>
                    </tr>
                    <tr>
                    <td>\N{name}</td>
                    <td>іменований символ</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Опис Спецсимволи<i class="material-icons right">close</i></span>
                    <p>
                        Інші спеціальні символи в регулярних виразах відповідають незвичайним елементам в тексті. Перенесення рядка та табуляції, наприклад, можуть бути набрані з клавіатури, але¦ймовірно зіб'ють з толку мови програмування. Знак екранування використовується тут для того, щоб повідомити парсера про необхідність вважати наступний символ спеціальним, а не звичайною літерою або цифрою.
                    </p>
            </div>
        </div>
    </div>
    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Групи<i class="material-icons right">more_vert</i></span>
                <table>
                    <tbody>
                    <tr>
                    <td>.</td>
                    <td>будь-який символ, крім переноса рядка (\n)</td>
                    </tr>
                    <tr>
                    <td>(a|b)</td>
                    <td>"a" або "b"</td>
                    </tr>
                    <tr>
                    <td>(...)</td>
                    <td>група</td>
                    </tr>
                    <tr>
                    <td>(?:...)</td>
                    <td>пасивна група</td>
                    </tr>
                    <tr>
                    <td>[abc]</td>
                    <td>діапазон ("a" або "b" або "с")</td>
                    </tr>
                    <tr>
                    <td>[^abc]</td>
                    <td>не "a", не "b" та не "c"</td>
                    </tr>
                    <tr>
                    <td>[a-q]</td>
                    <td>літера між "a" та "q"</td>
                    </tr>
                    <tr>
                    <td>[A-Q]</td>
                    <td>літера у верхньому регістрі між "A" та "Q"</td>
                    </tr>
                    <tr>
                    <td>[0-7]</td>
                    <td>цифра між "0" та "7"</td>
                    </tr>
                    <tr>
                    <td>\n</td>
                    <td>"n"-а група/підшаблон</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Опис Групи<i class="material-icons right">close</i></span>
                    <p>
                        Групи та діапазони дуже-дуже корисні. Ймовірно, простіше розпочатиме з діапазонів. Вони дозволяють вказати набір відповідних символів.
                    </p>
            </div>
        </div>
    </div>
</div>

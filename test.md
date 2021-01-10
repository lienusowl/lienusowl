# Паззлинатор

Программист Сергей принимает участие в соревновании по сборке паззлов `10x10` на скорость. Ему безумно хочется победить - ещё бы, ведь призом является уникальный паззл 100х100 с логотипом React, на котором оставил автограф сам Дэн Абрамов!

Поскольку правила соревнований не запрещают использование технических средств, у Сергея есть план! Он разработал специальные очки, которые мгновенно сканируют каждый кусочек паззла, классифицируют "ушки" на каждой стороне, и представляют данные в виде массива паззлов:

![Ушки](http://i.piccy.info/i9/ab651198cea8d9c908cc2c2929830cef/1609327670/13595/1411622/p1.png)

Каждый элемент этого массива описывает один фрагмент паззла в следующем формате:
```js
{
    id: 8 // Некий уникальный номер паззла
    edges: { // описание сторон фрагмента
        top: { 
          edgeTypeId: 8, // уникальный идентификатор формы ушка
          type: 'inside' // 'inside' если это выемка, 'outside' если это выступ
        },
        left: { edgeTypeId: 38, type: 'outside' },
        right: null  // кромка может быть null, это означает что паззл на этой стороне не имеет ушка
        bottom: null
    }
}
```

К сожалению, сегодня уже ночь перед соревнованием, а Сергей ещё дорабатывает свои чудо-очки. Вам же необходимо написать программу, которая собирает паззл.
В файле `solution.js` необходимо реализовать функцию `solvePuzzle`. Функция получает на вход массив ровно из 100 фрагментов паззла, каждый фрагмент описан в формате, указанном выше и должна вернуть массив из 100 чисел - id паззлов в порядке их укладывания от левого верхнего угла до правого нижнего. Паззл который должен быть первым (в левом верхнем углу) **всегда** является первым во входном массиве (хотя возможно его придётся повернуть). Также Сергей уверен, что каждый тип (`edgeTypeId`) ушка встречается в массиве фрагментов паззла ровно два раза (один выступ и один вырез)

Давайте разбем задачу на упрощенном примере 3х3. На вход вашей функции `solvePuzzle` подаётся следующий массив:

```js
[
  {
    id: 1,
    edges: {
      top: null,
      right: { edgeTypeId: 7, type: "outside" },
      bottom: { edgeTypeId: 5, type: "inside" },
      left: null,
    },
  },
  {
    id: 9,
    edges: {
      top: { edgeTypeId: 8, type: "inside" },
      right: { edgeTypeId: 15, type: "inside" },
      bottom: null,
      left: { edgeTypeId: 5, type: "outside" },
    },
  },
  {
    id: 5,
    edges: {
      top: null,
      right: { edgeTypeId: 2, type: "inside" },
      bottom: { edgeTypeId: 1, type: "inside" },
      left: null,
    },
  },
  {
    id: 4,
    edges: {
      top: { edgeTypeId: 34, type: "inside" },
      right: { edgeTypeId: 11, type: "outside" },
      bottom: { edgeTypeId: 7, type: "inside" },
      left: null,
    },
  },
  {
    id: 3,
    edges: {
      top: { edgeTypeId: 2, type: "outside" },
      right: null,
      bottom: { edgeTypeId: 4, type: "outside" },
      left: { edgeTypeId: 6, type: "inside" },
    },
  },
  {
    id: 2,
    edges: {
      top: { edgeTypeId: 3, type: "outside" },
      right: { edgeTypeId: 34, type: "outside" },
      bottom: null,
      left: null,
    },
  },
  {
    id: 8,
    edges: {
      top: null,
      right: { edgeTypeId: 15, type: "outside" },
      bottom: { edgeTypeId: 4, type: "inside" },
      left: null,
    },
  },
  {
    id: 7,
    edges: {
      top: { edgeTypeId: 3, type: "inside" },
      right: null,
      bottom: { edgeTypeId: 1, type: "outside" },
      left: { edgeTypeId: 10, type: "inside" },
    },
  },
  {
    id: 6,
    edges: {
      top: { edgeTypeId: 11, type: "inside" },
      right: { edgeTypeId: 10, type: "outside" },
      bottom: { edgeTypeId: 6, type: "outside" },
      left: { edgeTypeId: 8, type: "outside" },
    },
  },
];
```

Визуализируем этот массив (обратите внимание, что фрагменты на картинке отсортированы по id для вашего удобства):

![Паззлы](http://i.piccy.info/i9/58a8ab7e75533a9bd6f41d9dd3d13aec/1609331114/51402/1411622/p2.png)

Для этого входа результатом будет следующий массив:
```js
[1, 4, 2, 9, 6, 7, 8, 3, 5]
```

Визуализация:

![Паззлы](http://i.piccy.info/i9/d7c562008c15a9ddff97472ad52402b1/1609332445/31816/1411622/p3.png)

## Как сдавать задачу

1. Клонируйте git-репозиторий по адресу http://puzzle-task.t.javascript.ninja/git/jigsaw (подсказка: нет, `not found` если вы просто кликнули по ссылке - это не ошибка. Скормите этот адрес вашему git)
2. Реализуйте ваше решение в файле `solution.js`
3. Закомитьте и запушьте его в `master`

### Если что-то пошло не так или остались вопросы

Пишите в чат https://t.me/javascript_ninja или на почту illya@javascript.ninja
Успехов!

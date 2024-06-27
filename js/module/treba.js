
export const initTreba = () => {

    const trebaListZ = [
        {
            name: 'Заказной индивидуальный молебен',
            cost: 1200,
        },

        {
            name: 'Лития',
            cost: 1200,
        },
        {
            name: 'Обедня',
            cost: 1200,
        },
        {
            name: 'Молебен',
            cost: 1200,
        },
        {
            name: 'Сугубый молебен: В узах сидящих',
            cost: 1200,
        },
        {
            name: 'Проскомидия',
            cost: 1200,
        },
        {
            name: 'Сугубый молебен: Благодарственный Господу',
            cost: 1200,
        },
        {
            name: 'Сугубый молебен: На призывание помощи Божией',
            cost: 1200,
        },
        {
            name: 'Сугубый молебен: О путешествующих',
            cost: 1200,
        },
        {
            name: 'Масло лампадное в алтарь (1 литр)',
            cost: 1200,
        },
        {
            name: 'Уголь в алтарь',
            cost: 1200,
        },
        {
            name: 'Сугубый молебен: О болящих',
            cost: 1200,
        },
        {
            name: 'Масло лампадное в алтарь (1,5 литров)',
            cost: 1200,
        },
        {
            name: 'Масло лампадное в алтарь (1,5 литров)',
            cost: 1200,
        },
        {
            name: 'Масло лампадное в алтарь (1 литр)',
            cost: 1200,
        },
        {
            name: 'Уголь в алтарь',
            cost: 1200,
        },
        {
            name: 'Ладан в алтарь',
            cost: 1200,
        },
        {
            name: 'Масло лампадное в алтарь (1,5 литров)',
            cost: 1200,
        },
        {
            name: 'Сорокоуст',
            cost: 1200,
        },
        {
            name: 'Свеча диаконская в алтарь',
            cost: 1200,
        },
        {
            name: 'Свеча в алтарь',
            cost: 1200,
        },
        {
            name: 'Кагор в алтарь',
            cost: 1200,
        },

        {
            name: 'Молебен на начало нового учебного года',
            cost: 1200,
        },

    ];

    const trebaListU = [
        {
            name: 'Заказной индивидуальный молебен',
            cost: 1200,
        },
        {
            name: 'Лития',
            cost: 1200,
        },
        {
            name: 'Обедня',
            cost: 1200,
        },
        {
            name: 'Сугубый молебен: В узах сидящих',
            cost: 1500,
        },
        {
            name: 'Проскомидия',
            cost: 1000,
        },
        {
            name: 'Сугубый молебен: Благодарственный Господу',
            cost: 1500,
        },
        {
            name: 'Родительская суббота, Радоница',
            cost: 1300,
        },
        {
            name: 'Годовое поминание',
            cost: 10000,
        },
        {
            name: 'Масло лампадное в алтарь (1 литр)',
            cost: 500,
        },
        {
            name: 'Уголь в алтарь',
            cost: 300,
        },
        {
            name: 'Сугубый молебен: О болящих',
            cost: 1500,
        },
        {
            name: 'Масло лампадное в алтарь (1,5 литров)',
            cost: 750,
        },
        {
            name: 'Ладан в алтарь',
            cost: 400,
        },
        {
            name: 'Сорокоуст',
            cost: 5000,
        },
        {
            name: 'Свеча в алтарь',
            cost: 200,
        },
        {
            name: 'Масло лампадное в алтарь (2 литра)',
            cost: 1000,
        },
        {
            name: 'Кагор в алтарь',
            cost: 600,
        },
        {
            name: 'Свеча диаконская в алтарь',
            cost: 250,
        },
        {
            name: 'Полугодовое поминание',
            cost: 5000,
        },
        {
            name: 'Заказная Литургия',
            cost: 1500,
        },
        {
            name: 'Заочное отпевание',
            cost: 2000,
        },
    ];

    const trebaType = document.querySelector('#treba-select');
    const trebaSelect = document.querySelector('#treba-name-select');
    const contentSpan = document.querySelector('.rite-content-span');

    const imgTop = document.querySelector('.img-rite-top');
    const imgMiddle = document.querySelector('.rite__content');
    const imgBottom = document.querySelector('.img-rite-bottom');

    const createOptions = (data) => {
        data.map(item => {
            let option = document.createElement("option");
            option.value = item['name'];
            option.textContent = item['name'];
            option.setAttribute('data-cost', item['cost']);
            trebaSelect.appendChild(option);
        });
    };

    createOptions(trebaListZ);

    trebaType.addEventListener('change', () => {
        if (trebaType.value === 'value2') {
            imgTop.setAttribute('src', 'https://freelancer-vl.ru/wp-content/themes/sobor-inside/src/img/treba/top_u.jpg');
            imgMiddle.classList.add('is-active');
            imgBottom.setAttribute('src', 'https://freelancer-vl.ru/wp-content/themes/sobor-inside/src/img/treba/bottom_u.jpg');
            trebaSelect.innerHTML = '';
            createOptions(trebaListU);
        }
        if (trebaType.value === 'value1') {
            trebaSelect.innerHTML = '';
            imgTop.setAttribute('src', 'https://freelancer-vl.ru/wp-content/themes/sobor-inside/src/img/treba/top_z.jpg');
            imgMiddle.classList.remove('is-active');
            imgBottom.setAttribute('src', 'https://freelancer-vl.ru/wp-content/themes/sobor-inside/src/img/treba/bottom_z.jpg');
            createOptions(trebaListZ);
        }
    });

    // Подставляет название требу в поле контент
    trebaSelect.addEventListener('change', () => {
        contentSpan.textContent = trebaSelect.value;
    });
}
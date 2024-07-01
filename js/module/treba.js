
export const initTreba = () => {

    const trebaListZ = [
        {
            name: 'Заказной индивидуальный молебен',
            cost: 1000,
        },

        {
            name: 'Молебен',
            cost: 20,
        },
        {
            name: 'Сугубый молебен: В узах сидящих',
            cost: 50,
        },
        {
            name: 'Сугубый молебен: Благодарственный Господу',
            cost: 50,
        },
        {
            name: 'Сугубый молебен: На призывание помощи Божией',
            cost: 50,
        },
        {
            name: 'Сугубый молебен: О болящих',
            cost: 50,
        },
        {
            name: 'Сугубый молебен: О путешествующих',
            cost: 50,
        },
        {
            name: 'Масло лампадное в алтарь (1 литр)',
            cost: 50,
        },
        {
            name: 'Уголь в алтарь',
            cost: 400,
        },
        {
            name: 'Масло лампадное в алтарь (1,5 литров)',
            cost: 750,
        },
        {
            name: 'Уголь в алтарь',
            cost: 400,
        },
        {
            name: 'Ладан в алтарь',
            cost: 500,
        },
        {
            name: 'Свеча в алтарь',
            cost: 500,
        },
        {
            name: 'Сорокоуст',
            cost: 500,
        },
        {
            name: 'Масло лампадное в алтарь (2 литра)',
            cost: 1000,
        },
        {
            name: 'Свеча дьяконская в алтарь',
            cost: 600,
        },
        {
            name: 'Кагор в алтарь',
            cost: 1000,
        },
        {
            name: 'Полугодовое поминание',
            cost: 1200,
        },
        {
            name: 'Заказная литургия',
            cost: 1500,
        },
        {
            name: 'Обедня',
            cost: 30,
        },

    ];

    const trebaListU = [
        {
            name: 'Лития',
            cost: 30,
        },
        {
            name: 'Обедня',
            cost: 30,
        },
        {
            name: 'Проскомидия',
            cost: 20,
        },
        {
            name: 'Родительская суббота, Радоница',
            cost: 40,
        },
        {
            name: 'Годовое поминание',
            cost: 2400,
        },
        {
            name: 'Масло лампадное в алтарь (1 литр)',
            cost: 500,
        },
        {
            name: 'Уголь в алтарь',
            cost: 400,
        },
        {
            name: 'Масло лампадное в алтарь (1,5 литров)',
            cost: 450,
        },
        {
            name: 'Ладан в алтарь',
            cost: 500,
        },
        {
            name: 'Сорокоуст',
            cost: 500,
        },
        {
            name: 'Свеча в алтарь',
            cost: 500,
        },
        {
            name: 'Масло лампадное в алтарь (2 литра)',
            cost: 1000,
        },
        {
            name: 'Кагор в алтарь',
            cost: 1000,
        },
        {
            name: 'Ладан в алтарь',
            cost: 700,
        },
        {
            name: 'Полугодовое поминание',
            cost: 1200,
        },
        {
            name: 'Заказная Литургия',
            cost: 1500,
        },
        {
            name: 'Заочное отпевание',
            cost: 5000,
        },
    ];

    const trebaType = document.querySelector('#treba-select');
    const trebaName = document.querySelector('#treba-name-select');
    const contentSpan = document.querySelector('.rite-content-span');
    const textArea = document.querySelector('#textarea-input');

    const imgTop = document.querySelector('.img-rite-top');
    const imgMiddle = document.querySelector('.rite__content');
    const imgBottom = document.querySelector('.img-rite-bottom');

    const contentNameCount = document.querySelector('.content-name-count');
    const riteContentNameList = document.querySelector('.rite-content-name-list');

    const contentDays = document.querySelector('.content-days');
    const daysInput = document.querySelector('#days-input');

    const contentTotalSpan = document.querySelector('.content-total');
    const totalInput = document.querySelector('#total-sum');

    const createOptions = (data) => {
        data.map(item => {
            let option = document.createElement("option");
            option.value = item['name'];
            option.textContent = item['name'];
            option.setAttribute('data-cost', item['cost']);
            trebaName.appendChild(option);
        });
    };

    createOptions(trebaListZ);

    trebaType.addEventListener('change', () => {
        if (trebaType.value === 'value2') {
            imgTop.setAttribute('src', 'https://freelancer-vl.ru/wp-content/themes/sobor-inside/src/img/treba/top_u.jpg');
            imgMiddle.classList.add('is-active');
            imgBottom.setAttribute('src', 'https://freelancer-vl.ru/wp-content/themes/sobor-inside/src/img/treba/bottom_u.jpg');
            trebaName.innerHTML = '';
            createOptions(trebaListU);
        }
        if (trebaType.value === 'value1') {
            trebaName.innerHTML = '';
            imgTop.setAttribute('src', 'https://freelancer-vl.ru/wp-content/themes/sobor-inside/src/img/treba/top_z.jpg');
            imgMiddle.classList.remove('is-active');
            imgBottom.setAttribute('src', 'https://freelancer-vl.ru/wp-content/themes/sobor-inside/src/img/treba/bottom_z.jpg');
            createOptions(trebaListZ);
        }
    });

    // Подставляет название требу в поле контент
    trebaName.addEventListener('change', () => {
        contentSpan.textContent = trebaName.value;
    });

    contentDays.textContent = daysInput.value;
    // Подставляет количество дней в поле контент
    daysInput.addEventListener('input', () => {
        contentDays.textContent = daysInput.value;
    });

    // Слушатель ввода в Текстовое поле с именами
    textArea.addEventListener('input', () => {
        riteContentNameList.innerHTML = '';

        let nameList = [];
        let names = textArea.value.split(/[\n,]+/);
        names = names.map(name => name.trim()).filter(name => name !== '');
        nameList.push(...names);

        nameList.map(item => {
            let li = document.createElement("li");
            li.textContent = item;
            riteContentNameList.appendChild(li);
        });

        let nameCount = nameList.length;
        let coastOfCurrentTreba = trebaName.options[trebaName.selectedIndex].getAttribute('data-cost');
        contentNameCount.innerHTML = coastOfCurrentTreba;
        contentTotalSpan.innerHTML = coastOfCurrentTreba * daysInput.value * nameCount;
        totalInput.value = coastOfCurrentTreba * daysInput.value * nameCount;
    });


    // слушатель отправки формы 
    const form = document.querySelector('.main-treba-form');
    if (form) {
        form.addEventListener('submit', (evt) => {
            evt.preventDefault();

            // валидация полей формы
            const inputs = form.querySelectorAll('input, textarea');
            let isValid = true;
            inputs.forEach(input => {
                if (input.value.trim() === '') {
                    input.classList.add('_error');
                    input.value = 'Заполните поле';
                    isValid = false;
                } else {
                    input.classList.remove('_error');
                }
            });

            if (trebaName.value === 'Услуга не выбрана') {
                trebaName.classList.add('_error');
                isValid = false;
            }

            if (isValid) {
                form.submit();
                alert('Данные успешно отправлены');
            }
        });
    }

}
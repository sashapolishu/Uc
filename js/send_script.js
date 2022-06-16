const form = document.querySelector('.form');
const formInputs = document.querySelectorAll('.form input');
const formSelects = document.querySelectorAll('.form select');

form.addEventListener('submit', e => {
    const formBody = new FormData();

    const formAction = form.getAttribute('action'),
          formMethod = form.getAttribute('method');

    formInputs.forEach(input => {
        const inputName = input.getAttribute('name'),
              inputValue = input.value;

        formBody.append(inputName, inputValue);
    });

    formSelects.forEach(select => {
        const selectName = select.value,
              selectValue = select.options[select.selectedIndex].text;

        formBody.append(selectName, selectValue);
    });

    fetch(formAction, {
        method: formMethod,
        body: formBody
    }).then(response => console.log(response))
      .catch(error => console.error(error));

    e.preventDefault();
});
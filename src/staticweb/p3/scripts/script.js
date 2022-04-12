window.addEventListener('load', () => {
    // const params = (new URL(document.location)).searchParams;
    const name = localStorage.getItem('NAME');
    const nim = localStorage.getItem('NIM');
    const prodi = localStorage.getItem('PRODI');
    const gender = localStorage.getItem('GENDER');
    const address = localStorage.getItem('ADDRESS');
    const city = localStorage.getItem('CITY');
    const date = localStorage.getItem('DATE');
    const month = localStorage.getItem('MONTH');
    const year = localStorage.getItem('YEAR');
    const age = localStorage.getItem('AGE');
    const hobby = localStorage.getItem('HOBBY');
    const dream = localStorage.getItem('DREAM');
    const mail = localStorage.getItem('MAIL');
    const pn = localStorage.getItem('PN');

    document.getElementById('result-name').innerHTML = name;
    document.getElementById('result-nim').innerHTML = nim;
    document.getElementById('result-prodi').innerHTML = prodi;
    document.getElementById('result-gender').innerHTML = gender;
    document.getElementById('result-address').innerHTML = address;
    document.getElementById('result-city').innerHTML = city;
    document.getElementById('result-date').innerHTML = date;
    document.getElementById('result-month').innerHTML = month;
    document.getElementById('result-year').innerHTML = year;
    document.getElementById('result-age').innerHTML = age;
    document.getElementById('result-hobby').innerHTML = hobby;
    document.getElementById('result-dream').innerHTML = dream;
    document.getElementById('result-mail').innerHTML = mail;
    document.getElementById('result-pn').innerHTML = pn;
});

function handleSubmit() {
    const name = document.getElementById('name').value;
    const nim = document.getElementById('nim').value;
    const prodi = document.getElementById('prodi').value;
    const gender = getGender();
    const address = document.getElementById('address').value;
    const city = document.getElementById('city').value;
    const date = document.getElementById('date').value;
    const month = document.getElementById('month').value;
    const year = document.getElementById('year').value;
    const age = document.getElementById('age').value;
    const hobby = document.getElementById('hobby').value;
    const dream = document.getElementById('dream').value;
    const mail = document.getElementById('mail').value;
    const pn = document.getElementById('pn').value;

    localStorage.setItem('NAME', name);
    localStorage.setItem('NIM', nim);
    localStorage.setItem('PRODI', prodi);
    localStorage.setItem('GENDER', gender);
    localStorage.setItem('ADDRESS', address);
    localStorage.setItem('CITY', city);
    localStorage.setItem('DATE', date);
    localStorage.setItem('MONTH', month);
    localStorage.setItem('YEAR', year);
    localStorage.setItem('AGE', age);
    localStorage.setItem('HOBBY', hobby);
    localStorage.setItem('DREAM', dream);
    localStorage.setItem('MAIL', mail);
    localStorage.setItem('PN', pn);

    return;
}

function getGender() {
    const getValue = document.getElementsByName('gender');
    var gender;

    if (getValue[0].checked) {
        gender = getValue[0].value;
    } else if (getValue[1].checked) {
        gender = getValue[1].value;
    } else if (getValue[2].checked) {
        gender = getValue[2].value;
    }

    return gender;
}

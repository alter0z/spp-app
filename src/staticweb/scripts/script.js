// register
function getRegister() {
    const name = document.getElementById('reg-name').value;
    const role = document.getElementById('reg-role').value;
    const username = document.getElementById('reg-user').value;
    const password = document.getElementById('reg-pass').value;

    // caling function popup
    getPopupRegister(name, role, username, password);
}

// login
function getLogin() {
    // get data from local storage
    const role = localStorage.getItem('ROLE');
    const username = localStorage.getItem('USERNAME');
    const password = localStorage.getItem('PASS');

    const getRole = document.getElementById('log-role').value;
    const getUsername = document.getElementById('log-user').value;
    const getPassword = document.getElementById('log-pass').value;

    // call function popup
    getPopupLogin(role, getRole, username, getUsername, password, getPassword);
    // var modal = document.getElementById('mModal');
    // var modalContent = document.getElementById('modal-contents');

    // modal.style.display = 'block';
    // modalContent.style.backgroundColor = '#0ead69';
}

// add siswa
function addSiswa() {
    const nis = document.getElementById('add-nis').value;
    const name = document.getElementById('add-ns').value;
    const kelas = document.getElementById('add-class').value;
    const periode = document.getElementById('add-ta').value;
    const cost = document.getElementById('add-spp').value;
    const dueDate = document.getElementById('add-jt').value;
    const statues = document.getElementById('add-t').value;

    // call function popup
    getPopupAddSiswa(name, nis, kelas, periode, cost, dueDate, statues);
}

// get siswa name
function getName() {
    return localStorage.getItem('SNAME');
}

// add wali kelas
function addWalkas() {
    const kelas = document.getElementById('add-wclass').value;
    const name = document.getElementById('add-walkas').value;

    // call function popup
    getPopupAddWclass(kelas, name);
}

// show siswa
function showSiswa() {
    document.getElementById('result-nis').innerHTML = localStorage.getItem('NIS');
    document.getElementById('result-name').innerHTML = localStorage.getItem('SNAME');
    document.getElementById('result-class').innerHTML = localStorage.getItem('CLASS');
    document.getElementById('result-ta').innerHTML = localStorage.getItem('PERIODE');
    document.getElementById('result-spp').innerHTML = localStorage.getItem('COST');
    document.getElementById('result-jt').innerHTML = localStorage.getItem('DUEDATE');
}

// show walikelas
function showWalkas() {
    document.getElementById('result-wclass').innerHTML = localStorage.getItem('WCLASS');
    document.getElementById('result-namewk').innerHTML = localStorage.getItem('WNAME');
}

// show walikelas
function showUser() {
    document.getElementById('result-uname').innerHTML = localStorage.getItem('NAME');
    document.getElementById('result-username').innerHTML = localStorage.getItem('USERNAME');
    document.getElementById('result-role').innerHTML = localStorage.getItem('ROLE');
}

// show transaction
function showTransaction() {
    document.getElementById('result-statues').innerHTML = localStorage.getItem('STATUES');
    document.getElementById('result-nis').innerHTML = localStorage.getItem('NIS');
    document.getElementById('result-name').innerHTML = localStorage.getItem('SNAME');
    document.getElementById('result-class').innerHTML = localStorage.getItem('CLASS');
    document.getElementById('result-namewk').innerHTML = localStorage.getItem('WNAME');
}

// add transaction
function addTransaction() {
    const statues = document.getElementById('update-t').value;

    // calling function popup
    getPopupAddTransaction(statues);
}

// clear data
function clearData() {
    confirm('Anda yakin akan menghapus data?') ? (localStorage.clear(), alert('Data berhasil dihapus!')) : alert('Data gagal dihapus!');
}

// popup
function getPopupAddSiswa(name, nis, kelas, periode, cost, dueDate, statues) {
    // get id / reference
    var modal = document.getElementById('mModal');
    var spans = document.getElementsByClassName('close')[0];
    var modalContent = document.getElementById('modal-contents');

    // function clearing input field
    function clearInput() {
        document.getElementById('add-nis').value = '';
        document.getElementById('add-ns').value = '';
        document.getElementById('add-class').value = null;
    }

    // set display popup (visible)
    modal.style.display = 'block';

    // when popup closed
    spans.onclick = function () {
        // set popup display (invisible)
        modal.style.display = 'none';

        // clearing input field when popup closed
        clearInput();
    };

    // check input field
    nis == '' || name == '' || kelas == 'null'
        ? ((document.getElementById('message').innerHTML = 'Data Masih Kosong!'), (modalContent.style.backgroundColor = '#ee4266'))
        : (localStorage.setItem('NIS', nis),
          localStorage.setItem('SNAME', name),
          localStorage.setItem('CLASS', kelas),
          localStorage.setItem('PERIODE', periode),
          localStorage.setItem('COST', cost),
          localStorage.setItem('DUEDATE', dueDate),
          localStorage.setItem('STATUES', statues),
          (document.getElementById('message').innerHTML = 'Data Berhasil ditambahkan!'),
          (modalContent.style.backgroundColor = '#0ead69')) /*,
          window.open('showSiswa.html')*/;

    // when anywhere click
    window.onclick = function (event) {
        if (event.target == modal) {
            // set popup display (invisible)
            modal.style.display = 'none';

            // clearing input field when popup closed
            clearInput();
        }
    };
}

function getPopupAddTransaction(statues) {
    // get id / reference
    var modal = document.getElementById('mModal');
    var spans = document.getElementsByClassName('close')[0];
    var modalContent = document.getElementById('modal-contents');

    // function clearing input field
    function clearInput() {
        document.getElementById('update-t').value = null;
    }

    // set display popup (visible)
    modal.style.display = 'block';

    // when popup closed
    spans.onclick = function () {
        // set popup display (invisible)
        modal.style.display = 'none';

        // clearing input field when popup closed
        clearInput();
    };

    // check input field
    statues == 'null'
        ? ((document.getElementById('message').innerHTML = 'Pilih Status!'), (modalContent.style.backgroundColor = '#ee4266'))
        : (localStorage.setItem('STATUES', statues), (document.getElementById('message').innerHTML = 'Status berhasil diupdate!'), (modalContent.style.backgroundColor = '#0ead69')) /*,
          window.open('showSiswa.html')*/;

    // when anywhere click
    window.onclick = function (event) {
        if (event.target == modal) {
            // set popup display (invisible)
            modal.style.display = 'none';

            // clearing input field when popup closed
            clearInput();
        }
    };
}

function getPopupAddWclass(kelas, name) {
    // get id / reference
    var modal = document.getElementById('mModal');
    var spans = document.getElementsByClassName('close')[0];
    var modalContent = document.getElementById('modal-contents');

    // function clearing input field
    function clearInput() {
        document.getElementById('add-wclass').value = null;
        document.getElementById('add-walkas').value = null;
    }

    // set display popup (visible)
    modal.style.display = 'block';

    // when popup closed
    spans.onclick = function () {
        // set popup display (invisible)
        modal.style.display = 'none';

        // clearing input field when popup closed
        clearInput();
    };

    // check input field
    kelas == 'null' || name == 'null'
        ? ((document.getElementById('message').innerHTML = 'Pilih kelas dan wali kelas!'), (modalContent.style.backgroundColor = '#ee4266'))
        : (localStorage.setItem('WCLASS', kelas), localStorage.setItem('WNAME', name), (document.getElementById('message').innerHTML = 'Data walikelas berhasil ditambahkan!'), (modalContent.style.backgroundColor = '#0ead69')) /*,
          window.open('showSiswa.html')*/;

    // when anywhere click
    window.onclick = function (event) {
        if (event.target == modal) {
            // set popup display (invisible)
            modal.style.display = 'none';

            // clearing input field when popup closed
            clearInput();
        }
    };
}

function getPopupRegister(name, role, username, password) {
    // get id / reference
    var modal = document.getElementById('mModal');
    var spans = document.getElementsByClassName('close')[0];
    var modalContent = document.getElementById('modal-contents');

    // function clearing input field
    function clearInput() {
        document.getElementById('reg-name').value = '';
        document.getElementById('reg-role').value = null;
        document.getElementById('reg-user').value = '';
        document.getElementById('reg-pass').value = '';
    }

    // set display popup (visible)
    modal.style.display = 'block';

    // when popup closed
    spans.onclick = function () {
        // set popup display (invisible)
        modal.style.display = 'none';

        // clearing input field when popup closed
        clearInput();

        // redirrect to login
        if (isSucces) window.open('login.html');
    };

    // bool check success event
    var isSucces = false;

    // check input field
    name == '' || role == 'null' || username == '' || password == ''
        ? ((document.getElementById('message').innerHTML = 'Input masih kosong!'), (modalContent.style.backgroundColor = '#ee4266'))
        : password.length < 8
        ? ((document.getElementById('message').innerHTML = 'Password minimal 8 karakter!'), (modalContent.style.backgroundColor = '#ffd23f'))
        : (localStorage.setItem('NAME', name),
          localStorage.setItem('ROLE', role),
          localStorage.setItem('USERNAME', username),
          localStorage.setItem('PASS', password),
          (document.getElementById('message').innerHTML = 'Daftar Berhasil!'),
          (modalContent.style.backgroundColor = '#0ead69'),
          (isSucces = true));

    // when anywhere click
    window.onclick = function (event) {
        if (event.target == modal) {
            // set popup display (invisible)
            modal.style.display = 'none';

            // clearing input field when popup closed
            clearInput();

            // redirrect to login
            if (isSucces) window.open('login.html');
        }
    };
}

function getPopupLogin(role, getRole, username, getUsername, password, getPassword) {
    // get id / reference
    var modal = document.getElementById('mModal');
    var spans = document.getElementsByClassName('close')[0];
    var modalContent = document.getElementById('modal-contents');

    // function clearing input field
    function clearInput() {
        document.getElementById('log-role').value = null;
        document.getElementById('log-user').value = '';
        document.getElementById('log-pass').value = '';
    }

    // set display popup (visible)
    modal.style.display = 'block';

    // when popup closed
    spans.onclick = function () {
        // set popup display (invisible)
        modal.style.display = 'none';

        // clearing input field when popup closed
        clearInput();

        // redirrect to login
        if (isSucces) window.open('index.html');
    };

    // bool check success event
    var isSucces = false;

    // check input field
    // role == 'null' || username == '' || password == ''
    //     ? ((document.getElementById('message').innerHTML = 'Input masih kosong!'), (modalContent.style.backgroundColor = '#ee4266'))
    //     : getRole === role && getPassword === password && getUsername === username
    //     ? ((document.getElementById('message').innerHTML = 'Login Berhasil!'), (modalContent.style.backgroundColor = '#0ead69'), (isSucces = true))
    //     : (document.getElementById('message').innerHTML = 'username atau password atau role salah!'),
    //     (modalContent.style.backgroundColor = '#ee4266');

    if (role == 'null' || username == '' || password == '') {
        document.getElementById('message').innerHTML = 'Input masih kosong!';
        modalContent.style.backgroundColor = '#ee4266';
    } else {
        if (getRole === role && getPassword === password && getUsername === username) {
            document.getElementById('message').innerHTML = 'Login Berhasil!';
            modalContent.style.backgroundColor = '#0ead69';
            isSucces = true;
        } else {
            document.getElementById('message').innerHTML = 'username atau password atau role salah!';
            modalContent.style.backgroundColor = '#ee4266';
        }
    }

    // when anywhere click
    window.onclick = function (event) {
        if (event.target == modal) {
            // set popup display (invisible)
            modal.style.display = 'none';

            // clearing input field when popup closed
            clearInput();

            // redirrect to login
            if (isSucces) window.open('index.html');
        }
    };
}

// popup image
function getPopUpimg() {
    document.querySelectorAll('.colIndex img').forEach((image) => {
        image.onclick = () => {
            document.querySelector('.popup-image').style.display = 'block';
            document.querySelector('.popup-image img').src = image.getAttribute('src');
        };
    });
    document.querySelector('.popup-image span').onclick = () => {
        document.querySelector('.popup-image').style.display = 'none';
    };
}

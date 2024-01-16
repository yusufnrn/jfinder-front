$(document).ready(function () {
    var path = window.location.pathname;

    if (path === '/application') {
        document.getElementById('mainViewBody').style.marginBottom = '214.5px';
    } else {
        document.getElementById('mainViewBody').style.marginBottom = '0';
    }
})

function toggleFileInput() {
    var selectBox = document.getElementById('dosyaSec');
    var fileInputContainer = document.getElementById('dosya')

    var selectedOption = selectBox.options[selectBox.selectedIndex].value

    if (selectedOption === '1') {
        fileInputContainer.style.display = 'block';
    } else {
        fileInputContainer.style.display = 'none';
    }
}

function tedarikciLojistik() {
    var selectBox = document.getElementById('applicationForms_compType');
    var selectedOption = selectBox.options[selectBox.selectedIndex].value;

    if (selectedOption === '0') {
        document.getElementById('formElements').style.display = 'block';

        document.getElementById('isAlani').style.display = 'block';
        document.getElementById('kategoriCesitleri').style.display = 'block';
        document.getElementById('sirketinBasligi').style.display = 'block';
        document.getElementById('uretimKapasitesi').style.display = 'block';
        document.getElementById('uretimYaptigiAlan').style.display = 'block';
        document.getElementById('urunCesitleri').style.display = 'block';

        document.getElementById('servisAlani').style.display = 'none';
        document.getElementById('montajEkibiVar').style.display = 'none';
        document.getElementById('montajEkibi').style.display = 'none';
        document.getElementById('aracTuru').style.display = 'none';
        document.getElementById('aracModeli').style.display = 'none';
        document.getElementById('aracYasi').style.display = 'none';
        document.getElementById('aracHacmi').style.display = 'none';
    } else if (selectedOption === '1') {
        document.getElementById('formElements').style.display = 'block';

        document.getElementById('isAlani').style.display = 'none';
        document.getElementById('kategoriCesitleri').style.display = 'none';
        document.getElementById('sirketinBasligi').style.display = 'none';
        document.getElementById('uretimKapasitesi').style.display = 'none';
        document.getElementById('uretimYaptigiAlan').style.display = 'none';
        document.getElementById('urunCesitleri').style.display = 'none';

        document.getElementById('servisAlani').style.display = 'block';
        document.getElementById('montajEkibiVar').style.display = 'block';
        document.getElementById('montajEkibi').style.display = 'block';
        document.getElementById('aracTuru').style.display = 'block';
        document.getElementById('aracModeli').style.display = 'block';
        document.getElementById('aracYasi').style.display = 'block';
        document.getElementById('aracHacmi').style.display = 'block';
    } else {
        document.getElementById('formElements').style.display = 'none';
    }
}

function checkChar() {
    var allowedChar = 1000;
    var content = document.getElementsByClassName("limitedTextArea")

    for (i = 0; i < content.length; i++) {
        var contLength = content[i].value.length;

        if (contLength > allowedChar) {
            content[i].value = content[i].value.substring(0, allowedChar);
            //document.getElementById("report").innerHTML = "<span style='color:red;'>UYARI: En fazla " + allowedChar + " karakter girebilirsiniz</span>";
        }
    }


}




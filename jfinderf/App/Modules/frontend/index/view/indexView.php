<?php
if ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index' || $_SERVER['REQUEST_URI'] === '/index/true') { ?>
<div class="enterance">
    <section class="intro">
        <h2>İş Bulma ve İş İlanı Verme Platformu</h2>
        <p><strong>jFinder</strong>, iş bulma ve iş ilanı verme sürecini kolaylaştıran bir sosyal medya platformudur. İşverenler, pozisyon türü, konum, gerekli beceriler ve deneyim gibi bilgileri iş ilanlarında belirtebilirler. İş arayanlar ise açık iş ilanlarını arayarak ilgi alanlarına ve kriterlerine uygun işleri bulabilirler.</p>
    </section>
    <section class="features">
        <h2>Özellikler</h2>
        <ul>
            <li>
                <h3>İş İlanı Oluşturma ve Yayınlama</h3>
                <p>İşverenler, jFinder aracılığıyla kolayca iş ilanları oluşturabilir ve yayınlayabilir. İş ilanlarında, pozisyonun türü, konumu, gerekli beceriler ve deneyim gibi bilgileri belirtebilirler.</p>
            </li>
            <li>
                <h3>İş İlanı Arama</h3>
                <p>İş arayanlar, jFinder aracılığıyla açık iş ilanlarını kolayca arayabilirler. Arama filtrelerini kullanarak, ilgi alanlarına ve kriterlerine uygun iş ilanlarını bulabilirler.</p>
            </li>
            <li>
                <h3>Profil Oluşturma ve Düzenleme</h3>
                <p>İş arayanlar ve işverenler, jFinder aracılığıyla profil oluşturabilir ve düzenleyebilirler. Profillerinde, eğitim, iş deneyimi, beceriler ve ilgi alanları gibi bilgileri paylaşabilirler.</p>
            </li>
        </ul>
    </section>
    <section class="call-to-action">
        <h2>jFinder, iş arayanlar ve işverenler için ideal bir platformdur.</h2>
        <a href="/login">Hemen kaydolun ve iş bulmaya başlayın!</a>
    </section>
</div>
<?php }
  
<div style="position: relative; top: -85px;">
  <section class="module-color-dos more">
    <div class="container">
      <div class="titulo-dos text-center wow fadeInUp">
        <h2>Tapplock bluetooth padlock</h2>
      </div>
      <div class="space"></div>
      <div class="row">
        <div class="col-sm-4">
          <div class="accordion left">
            <dl>
              <dt>
                <a href="#more1" aria-expanded="false" aria-controls="more1" class="accordion-title accordionTitle js-accordionTrigger">
                  <span><img src="themes/classic/assets/img/icons/agua.svg"></span>Resistente al agua</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="more1" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum.</p>
              </dd>
              <dt>
                <a href="#more2" aria-expanded="false" aria-controls="more2" class="accordion-title accordionTitle js-accordionTrigger">
                  <span><img src="themes/classic/assets/img/icons/irrompible.svg"></span>Durabilidad irrompible</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="more2" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum.</p>
              </dd>
              <dt>
                <a href="#more3" aria-expanded="false" aria-controls="more3" class="accordion-title accordionTitle js-accordionTrigger">
                  <span><img src="themes/classic/assets/img/icons/phone.svg"></span>Acceso inalambnrico compartido</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="more3" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum.</p>
              </dd>
            </dl>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="image-more">
            <img src="themes/classic/assets/img/tapp-01-carousel.png" class="img-responsive">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="accordion right">
            <dl>
              <dt>
                <a href="#more4" aria-expanded="false" aria-controls="more4" class="accordion-title accordionTitle js-accordionTrigger">
                  <span><img src="themes/classic/assets/img/icons/agua.svg"></span>Resistente al agua</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="more4" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum.</p>
              </dd>
              <dt>
                <a href="#more5" aria-expanded="false" aria-controls="more5" class="accordion-title accordionTitle js-accordionTrigger">
                  <span><img src="themes/classic/assets/img/icons/irrompible.svg"></span>Durabilidad irrompible</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="more5" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum.</p>
              </dd>
              <dt>
                <a href="#more6" aria-expanded="false" aria-controls="more6" class="accordion-title accordionTitle js-accordionTrigger">
                  <span><img src="themes/classic/assets/img/icons/phone.svg"></span>Acceso inalambnrico compartido</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="more6" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum.</p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>  
  </section>
  {if $home_section.sections}
        {foreach from=$home_section.sections item=section}
          <section class="featured {$section.class} wow fadeIn" style="background-image: url({$section.image_url});" data-wow-delay=".5s">
            <div class="container">
              <div class="row">
                <div class="info {$section.content_class}" data-wow-delay="1s">
                  <div class="titulo">
                    <img src="{$section.image_title_url}" class="img-responsive">
                  </div>
                  <div class="image visible-xs">
                    <img src="{$section.image_url}" class="img-responsive">
                  </div>
                  <h3>{$section.title}</h3>
                  {$section.description nofilter}
                  <a class="btn btn-default" href="{$section.url}">Conócelo aquí</a>
                </div>
              </div>
            </div>
          </section>
        {/foreach}
  {/if}
</div>

 <!--  <section class="module-color-dos more">
    <div class="container">
      <div class="titulo-dos text-center wow fadeInUp">
        <h2>Tapplock bluetooth padlock</h2>
      </div>
      <div class="space"></div>
      <div class="row">
        <div class="col-sm-4">
          <div class="accordion left">
            <dl>
              <dt>
                <a href="#more1" aria-expanded="false" aria-controls="more1" class="accordion-title accordionTitle js-accordionTrigger">
                  <span><img src="img/icons/agua.svg"></span>Resistente al agua</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="more1" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum.</p>
              </dd>
              <dt>
                <a href="#more2" aria-expanded="false" aria-controls="more2" class="accordion-title accordionTitle js-accordionTrigger">
                  <span><img src="img/icons/irrompible.svg"></span>Durabilidad irrompible</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="more2" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum.</p>
              </dd>
              <dt>
                <a href="#more3" aria-expanded="false" aria-controls="more3" class="accordion-title accordionTitle js-accordionTrigger">
                  <span><img src="img/icons/phone.svg"></span>Acceso inalambnrico compartido</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="more3" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum.</p>
              </dd>
            </dl>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="image-more">
            <img src="img/tapp-01-carousel.png" class="img-responsive">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="accordion right">
            <dl>
              <dt>
                <a href="#more4" aria-expanded="false" aria-controls="more4" class="accordion-title accordionTitle js-accordionTrigger">
                  <span><img src="img/icons/agua.svg"></span>Resistente al agua</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="more4" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum.</p>
              </dd>
              <dt>
                <a href="#more5" aria-expanded="false" aria-controls="more5" class="accordion-title accordionTitle js-accordionTrigger">
                  <span><img src="img/icons/irrompible.svg"></span>Durabilidad irrompible</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="more5" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum.</p>
              </dd>
              <dt>
                <a href="#more6" aria-expanded="false" aria-controls="more6" class="accordion-title accordionTitle js-accordionTrigger">
                  <span><img src="img/icons/phone.svg"></span>Acceso inalambnrico compartido</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="more6" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum.</p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>  
  </section> -->

<!--   <section class="featured one wow fadeIn" style="background-image: url(img/tapp-01.png);" data-wow-delay=".5s">
    <div class="container">
      <div class="row">
        <div class="info col-sm-6 col-sm-offset-6 wow fadeInRight" data-wow-delay="1s">
          <div class="titulo">
            <img src="img/tapplock-logo.svg" class="img-responsive">
          </div>
          <div class="image visible-xs">
            <img src="img/tapplock-01.png" class="img-responsive">
          </div>
          <h3>Tapplock Bluetooth padlock</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec neque pretium, condimentum risus in, semper dolor. Donec facilisis ante id dictum luctus. Proin accumsan magna eu quam auctor, id ullamcorper elit porta. Vestibulum dictum massa id elit faucibus, a tempus dolor viverra.</p>
          <p>Nunc tincidunt malesuada lectus non rhoncus. Praesent vitae auctor arcu, quis vehicula sapien. Nullam risus urna, vulputate sit amet est id, mollis scelerisque ipsum. Sed eleifend, ex et imperdiet tempus, ex metus molestie purus, eget vehicula turpis nisl ultricies nisi.</p>
          <a class="btn btn-default" href="#">Conócelo aquí</a>
        </div>
      </div>
    </div>
  </section>

  <section class="featured two wow fadeIn" style="background-image: url(img/noke.png);" data-wow-delay=".5s">
    <div class="container">
      <div class="row">
        <div class="info col-sm-6 wow fadeInLeft" data-wow-delay="1s">
          <div class="titulo">
            <img src="img/noke.svg" class="img-responsive">
          </div>
          <div class="image visible-xs">
            <img src="img/noke-01.png" class="img-responsive">
          </div>
          <h3>Noke Bluetooth padlock</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec neque pretium, condimentum risus in, semper dolor. Donec facilisis ante id dictum luctus. Proin accumsan magna eu quam auctor, id ullamcorper elit porta. Vestibulum dictum massa id elit faucibus, a tempus dolor viverra.</p>
          <p>Nunc tincidunt malesuada lectus non rhoncus. Praesent vitae auctor arcu, quis vehicula sapien. Nullam risus urna, vulputate sit amet est id, mollis scelerisque ipsum. Sed eleifend, ex et imperdiet tempus, ex metus molestie purus, eget vehicula turpis nisl ultricies nisi.</p>
          <a class="btn btn-default" href="#">Conócelo aquí</a>
        </div>
      </div>
    </div>
  </section>

  <section class="featured three wow fadeIn" style="background-image: url(img/easylock-big-02.png);" data-wow-delay=".5s">
    <div class="container">
      <div class="row">
        <div class="info col-sm-6 col-sm-offset-6 wow fadeInRight" data-wow-delay="1s">
          <div class="titulo">
            <img src="img/easylock-color.svg" class="img-responsive">
          </div>
          <div class="image visible-xs">
            <img src="img/easylock-01.png" class="img-responsive">
          </div>
          <h3>Easylock Bluetooth padlock</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec neque pretium, condimentum risus in, semper dolor. Donec facilisis ante id dictum luctus. Proin accumsan magna eu quam auctor, id ullamcorper elit porta. Vestibulum dictum massa id elit faucibus, a tempus dolor viverra.</p>
          <p>Nunc tincidunt malesuada lectus non rhoncus. Praesent vitae auctor arcu, quis vehicula sapien. Nullam risus urna, vulputate sit amet est id, mollis scelerisque ipsum. Sed eleifend, ex et imperdiet tempus, ex metus molestie purus, eget vehicula turpis nisl ultricies nisi.</p>
          <a class="btn btn-default" href="#">Conócelo aquí</a>
        </div>
      </div>
    </div>
  </section> -->

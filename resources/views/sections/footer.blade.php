@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> footer</p>
@endif

<footer class="usa-footer">
  <div class="grid-container usa-footer__return-to-top">
    <a href="#">Return to top</a>
  </div>
  <div class="usa-footer__primary-section">
    <nav class="usa-footer__nav" aria-label="Footer navigation">
      <ul class="grid-row grid-gap">
        <li class="mobile-lg:grid-col-4 desktop:grid-col-auto usa-footer__primary-content">
          <a class="usa-footer__primary-link" href="javascript:void(0);">&lt;Primary link&gt;</a>
        </li>
        <li class="mobile-lg:grid-col-4 desktop:grid-col-auto usa-footer__primary-content">
          <a class="usa-footer__primary-link" href="javascript:void(0);">&lt;Primary link&gt;</a>
        </li>
        <li class="mobile-lg:grid-col-4 desktop:grid-col-auto usa-footer__primary-content">
          <a class="usa-footer__primary-link" href="javascript:void(0);">&lt;Primary link&gt;</a>
        </li>
        <li class="mobile-lg:grid-col-4 desktop:grid-col-auto usa-footer__primary-content">
          <a class="usa-footer__primary-link" href="javascript:void(0);">&lt;Primary link&gt;</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="usa-footer__secondary-section">
    <div class="grid-container">
      <div class="grid-row grid-gap">
        <div class="usa-footer__logo grid-row mobile-lg:grid-col-6 mobile-lg:grid-gap-2">
          <div class="mobile-lg:grid-col-auto">
            <img class="usa-footer__logo-img" src="@asset('images/logo-img.png')" alt="" />
          </div>
          <div class="mobile-lg:grid-col-auto">
            <p class="usa-footer__logo-heading">&lt;Name of Agency&gt;</p>
          </div>
        </div>
        <div class="usa-footer__contact-links mobile-lg:grid-col-6">
          <div class="usa-footer__social-links grid-row grid-gap-1">
            <div class="grid-col-auto">
              <a class="usa-social-link" href="javascript:void(0);">
                <img class="usa-social-link__icon" src="@asset('images/usa-icons/facebook.svg')" alt="Facebook" />
              </a>
            </div>
            <div class="grid-col-auto">
              <a class="usa-social-link" href="javascript:void(0);">
                <img class="usa-social-link__icon" src="@asset('images/usa-icons/twitter.svg')" alt="Twitter" />
              </a>
            </div>
            <div class="grid-col-auto">
              <a class="usa-social-link" href="javascript:void(0);">
                <img class="usa-social-link__icon" src="@asset('images/usa-icons/youtube.svg')" alt="YouTube" />
              </a>
            </div>
            <div class="grid-col-auto">
              <a class="usa-social-link" href="javascript:void(0);">
                <img class="usa-social-link__icon" src="@asset('images/usa-icons/instagram.svg')" alt="Instagram" />
              </a>
            </div>
            <div class="grid-col-auto">
              <a class="usa-social-link" href="javascript:void(0);">
                <img class="usa-social-link__icon" src="@asset('images/usa-icons/rss_feed.svg')" alt="RSS" />
              </a>
            </div>
          </div>
          <p class="usa-footer__contact-heading"> &lt;Agency Contact Center&gt; </p>
          <address class="usa-footer__address">
            <div class="usa-footer__contact-info grid-row grid-gap">
              <div class="grid-col-auto">
                <a href="tel:1-800-555-5555">&lt;(800) 555-GOVT&gt;</a>
              </div>
              <div class="grid-col-auto">
                <a href="mailto:info@agency.gov">&lt;info@agency.gov&gt;</a>
              </div>
            </div>
          </address>
        </div>
      </div>
    </div>
  </div>
</footer>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> footer</p>
@endif
@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> Banner</p>
@endif

<section class="usa-banner{{
  ($officialBanner['dark'] ? ' usa-banner--dark' : '')
  }}" aria-label="Official website of the {{ $site['government'] }} government">
  <div class="usa-accordion">
    <header class="usa-banner__header">
      <div class="usa-banner__inner">
        <div class="grid-col-auto">
          <img aria-hidden="true" class="usa-banner__header-flag" src="{{ $officialBanner['icon'] }}" alt="" />
        </div>
        <div class="grid-col-fill tablet:grid-col-auto" aria-hidden="true">
          <p class="usa-banner__header-text">An official website of the {{ $site['government'] }} government</p>
          <p class="usa-banner__header-action">Here’s how you know</p>
        </div>
        <button type="button" class="usa-accordion__button usa-banner__button" aria-expanded="false" aria-controls="gov-banner-default">
          <span class="usa-banner__button-text">Here’s how you know</span>
        </button>
      </div>
    </header>
    <div class="usa-banner__content usa-accordion__content" id="gov-banner-default">
      <div class="grid-row grid-gap-lg">
        <div class="usa-banner__guidance tablet:grid-col-6">
          <img class="usa-banner__icon usa-media-block__img" src="@asset('images/icon-dot-gov.svg')" role="img" alt="" aria-hidden="true" />
          <div class="usa-media-block__body">
            <p>
              <strong>Official websites use {{ $site['tld'] }}</strong><br />A
              <strong>{{ $site['tld'] }}</strong> website belongs to an official government
              organization in the {{ $site['government'] }}.
            </p>
          </div>
        </div>
        <div class="usa-banner__guidance tablet:grid-col-6">
          <img class="usa-banner__icon usa-media-block__img" src="@asset('images/icon-https.svg')" role="img" alt="" aria-hidden="true" />
          <div class="usa-media-block__body">
            <p>
              <strong>Secure {{ $site['tld'] }} websites use HTTPS</strong><br />A
              <strong>lock</strong> (
              <span class="icon-lock">
                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="64" viewBox="0 0 52 64" class="usa-banner__lock-image" role="img" aria-labelledby="banner-lock-description-default" focusable="false">
                  <title id="banner-lock-title-default">Lock</title>
                  <desc id="banner-lock-description-default">Locked padlock icon</desc>
                  <path fill="#000000" fill-rule="evenodd" d="M26 0c10.493 0 19 8.507 19 19v9h3a4 4 0 0 1 4 4v28a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V32a4 4 0 0 1 4-4h3v-9C7 8.507 15.507 0 26 0zm0 8c-5.979 0-10.843 4.77-10.996 10.712L15 19v9h22v-9c0-6.075-4.925-11-11-11z" />
                </svg>
              </span>) or <strong>https://</strong> means you’ve safely connected to
              the {{ $site['tld'] }} website. Share sensitive information only on official,
              secure websites.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> Banner</p>
@endif
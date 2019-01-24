<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a href="$SiteConfig.PhoneNumber.getLinkURL">
                    <div class="main-footer__info">
                        <img class="main-footer__icons" src="$ThemeDir/dist/images/phone.svg" alt="Phone icon"/>
                        <p class="main-footer__text main-footer__details">$SiteConfig.PhoneNumber.Title</p>
                    </div>
                </a>
                <a href="$SiteConfig.Email.getLinkURL">
                    <div class="main-footer__info">
                        <img class="main-footer__icons" src="$ThemeDir/dist/images/email.svg" alt="Email icon"/>
                        <p class="main-footer__text main-footer__details">$SiteConfig.Email.Title</p>
                    </div>
                </a>
                <a href="https://www.facebook.com/{$SiteConfig.FacebookUser}">
                    <div class="main-footer__info">
                        <img class="main-footer__icons" src="$ThemeDir/dist/images/facebook.svg" alt="Facebook icon"/>
                        <p class="main-footer__text main-footer__details">
                            <% if $SiteConfig.FacebookTitle %>
                                $SiteConfig.FacebookTitle
                            <% else %>
                                $SiteConfig.FacebookUser
                            <% end_if %>
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 main-footer__sentence1">
                <p class="main-footer__text">$SiteConfig.FooterSentence1</p>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 order-md-12 order-xl-1 order-lg-12 order-sm-12 offset-lg-4 offset-xl-0  offset-md-0 main-footer__sentence2">
                <a href="$SiteConfig.FooterSentence2Link">
                    <p class="main-footer__text">$SiteConfig.FooterSentence2</p>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 order-md-1 order-xl-12 order-lg-1 order-sm-1 text-lg-right text-sm-left" >
                <img class="main-footer__image" src="$SiteConfig.FooterLogo.URL()" alt="Footer Logo"/>
            </div>
        </div>
    </div>
</footer>

<div class="locations">
    <div class="container">
        <div class="row locations__frame align-items-center">
            <div class="col-md-6">
                <picture class="location__img-frame">
                <source srcset="$CallToActionImage.Fill(560,480).URL()" media="(min-width: 1200px)" />
                <source srcset="$CallToActionImage.Fill(480,420).URL()" media="(min-width: 992px)" />
                <source srcset="$CallToActionImage.Fill(339,275).URL()" media="(min-width: 768px)" />
                <source srcset="$CallToActionImage.Fill(600,235).URL()" media="(min-width: 576px)" />
                <source srcset="$CallToActionImage.Fill(600,235).URL()" media="(max-width: 575px)" />
                <img src="$CallToActionImage.Fill(320,235).URL()" class="location_img" alt="location image" />
                </picture>
            </div>
            <div class="location__sm-img-frame col-md-5 offset-lg-1 order-md-12 order-sm-1 order-1">
                <div class="location__sm-image" style="background-image:url($CallToActionImage.Fill(600,400).URL);">
                </div>
            </div>
            <div class="col-md-6 text-md-left text-center">
                <h2 class="location__heading">$CallToActionHeading</h2>
                <p class="loaction__description">$CallToActionDesc</p>
                <a class="loaction__button btn" href="$CallToActionLink.Link" role="button">$CallToActionButton</a>
            </div>
        </div>
    </div>
</div>

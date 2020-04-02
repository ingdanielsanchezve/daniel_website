<template>
    <footer id="footer" class="m-0 p-0">
        <div class="footer-copyright bg-color-light m-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-0">
                        <p class="custom-text-color-2"> {{ $t('cv.rights') }} <a href="https://snyk.io/test/github/ingdanielsanchezve/daniel_website?targetFile=package.json"><img src="https://snyk.io/test/github/ingdanielsanchezve/daniel_website/badge.svg?targetFile=package.json" alt="Known Vulnerabilities" data-canonical-src="https://snyk.io/test/github/ingdanielsanchezve/daniel_website?targetFile=package.json" style="max-width:100%;"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>

export default {

    data : () => {
        return {
            year: ''
                    }
    }

}

</script>
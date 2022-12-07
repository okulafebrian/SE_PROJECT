<style>
    @media (max-width: 767px) {
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    /* medium and up screens */
    @media (min-width: 768px) {

        .carousel-inner .carousel-item-end.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(25%);
        }

        .carousel-inner .carousel-item-start.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-25%);
        }
    }

    .carousel-inner .carousel-item-end,
    .carousel-inner .carousel-item-start {
        transform: translateX(0);
    }

    #recipeCarousel .carousel-control-prev,
    #recipeCarousel .carousel-control-next {
        display:
    }
</style>

<div class="container m-5">
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-3">
                        <x-recipe></x-recipe>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <x-recipe></x-recipe>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <x-recipe></x-recipe>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <x-recipe></x-recipe>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <x-recipe></x-recipe>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <x-recipe></x-recipe>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev w-auto my-auto" href="#recipeCarousel" role="button" data-bs-slide="prev"
                style="height: fit-content">
                <div class="bg-primary p-3 rounded-3" aria-hidden="true">
                    <i class="fa fa-angle-left" style="color: #fff;"></i>
                </div>
            </a>
            <a class="carousel-control-next w-auto my-auto" href="#recipeCarousel" role="button" data-bs-slide="next"
                style="height: fit-content">
                <div class="bg-primary p-3 rounded-3" aria-hidden="true">
                    <i class="fa fa-angle-right" style="color: #fff;"></i>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })
</script>

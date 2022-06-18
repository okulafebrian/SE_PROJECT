{{-- recipe card --}}
<style>
    .hovereffect {
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
    }

    .hovereffect .overlay {
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        bottom: 0;
        left: 0;
        opacity: 0;
        filter: alpha(opacity=0);
        background-color: rgba(0,0,0,0.15);
        -webkit-transition: all 0.3s cubic-bezier(0, 0.2, 0, 0.05);
        transition: all 0.3s cubic-bezier(0, 0.2, 0, 0.05);
    }

    .hovereffect img {
        display: block;
        position: relative;
    }

    .hovereffect h2 {
        color: #fff;
        font-size: 17px;
        position: relative;
        background: rgba(0,0,0,0.5);
        -webkit-transform: translatey(-100%);
        -ms-transform: translatey(-100%);
        transform: translatey(-100%);
        -webkit-transition: all 0.4s cubic-bezier(0.2,-0.8, 0, 0.1);
        transition: all 0.4s cubic-bezier(0.2,-0.8,0, 0.1);
        padding: 10px;
    }

    .hovereffect:hover .overlay {
        opacity: 1;
        filter: alpha(opacity=100);
    }

    .hovereffect:hover h2{
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transform: translatey(0%);
        -ms-transform: translatey(0%);
        transform: translatey(0%);
    }
</style>

<div id="recipe-card" class="card mx-2"
     style="height: fit-content;"
>
    <div class="hovereffect">
        <img src="images/image2.jpg" class="card-img-top mx-auto img-fluid" style="width:100%;" alt="Image">
        <div class="overlay">
            <h2>Overview</h2>
        </div>
    </div>
    <div class="card-body pt-2 px-3 pb-0">
        <h5 class="card-title text-nowrap text-truncate fw-bolder fs-4"
            style="margin-block-end: 0;"
        >Food Name</h2>
        <p class="card-text fs-6 text-muted text-nowrap text-truncate fw-light"
        >Username</p>
        <div class="d-flex flex-row">
            <div class="rounded-3 bg-success text-white px-2 py-1 fw-normal"
                 style="font-size: 9px; min-width: 15px; width: fit-content; margin-right: 3px;"
            >
                Healthy
            </div>

            <div class="rounded-3 bg-warning text-white px-2 py-1 fw-normal"
                 style="font-size: 9px; min-width: 15px; width: fit-content; margin-right: 3px;"
            >
                Easy
            </div>
        </div>
        <div class="d-flex flex-row">
            <i class="bi bi-star-fill px-0.5" style="color: #F7D716"></i>
            <i class="bi bi-star-fill px-0.5" style="color: #F7D716"></i>
            <i class="bi bi-star-fill px-0.5" style="color: #F7D716"></i>
            <i class="bi bi-star-fill px-0.5" style="color: #b0b0b0"></i>
            <i class="bi bi-star-fill px-0.5" style="color: #b0b0b0"></i>
            <p class="fw-bold px-2" style="color: #F8B400">3.0</p>
        </div>
    </div>
</div>
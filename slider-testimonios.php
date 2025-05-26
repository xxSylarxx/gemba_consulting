<style>
    .slider-testimonios {
        position: relative;
        overflow: hidden;
        width: 80%;
        margin: auto;
    }

    .slider-container {
        display: flex;
        transition: transform 0.5s ease;
    }

    .slide {
        min-width: 100%;
        text-align: center;
    }

    #comilla{
        font-size: 3rem;
    }

    .slide img {
        width: 75%;
        margin: 0 auto;
    }

    .prev,
    .next {
        position: absolute;
        bottom: 2%;
        transform: translateY(-50%);
        background: #000;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    .prev {
        right: 80px;
    }

    .next {
        right: 10px;
    }
</style>

<div class="slider-testimonios" style="background-color:white;padding-top:5rem;">
    <div class="slider-container">
        <!-- Slide 1 -->
        <div class="slide ">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-5">
                    <img src="https://template.hasthemes.com/businex/businex/assets/img/testimonial/h-2-t-01.png" alt="Person 2">
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-end" style="position: relative;">
                    <div id="fijo" style="position: absolute; top: 20%; width: 100%;display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <h4>Testimonial 1</h4>
                        <h2>Don’t Believe us</h2>
                        
                        <p>"This is the first testimonial. It's amazing!"</p>
                    </div>
                    <div id="text-slider" class="d-flex flex-column align-items-start pb-5">
                        <i id="comilla" class="fas fa-quote-left"></i>&nbsp;
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eum, vel, fugit vitae, nesciunt rem necessitatibus nobis aliquid quibusdam rerum iste quo! Ducimus eius nihil, quisquam optio facere reiciendis culpa.</p>
                        <a href="./consultoria.php" class="btn-about">Conoce sus historias&nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="slide">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-5">
                    <img src="https://template.hasthemes.com/businex/businex/assets/img/testimonial/h-2-t-01.png" alt="Person 2">
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-end" style="position: relative;">
                    <div id="fijo" style="position: absolute; top: 20%; width: 100%;display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <h4>Testimonial 1</h4>
                        <h2>Don’t Believe us</h2>
                        
                        <p>"This is the first testimonial. It's amazing!"</p>
                    </div>
                    <div id="text-slider" class="d-flex flex-column align-items-start pb-5">
                        <i class="fas fa-quote-left"></i>&nbsp;
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eum, vel, fugit vitae, nesciunt rem necessitatibus nobis aliquid quibusdam rerum iste quo! Ducimus eius nihil, quisquam optio facere reiciendis culpa.</p>
                        <a href="./consultoria.php" class="btn-about">Conoce sus historias&nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="slide">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-5">
                    <img src="https://template.hasthemes.com/businex/businex/assets/img/testimonial/h-2-t-01.png" alt="Person 2">
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-end" style="position: relative;">
                    <div id="fijo" style="position: absolute; top: 20%; width: 100%;display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <h4>Testimonial 1</h4>
                        <h2>Don’t Believe us</h2>
                       
                        <p>"This is the first testimonial. It's amazing!"</p>
                    </div>
                    <div id="text-slider" class="d-flex flex-column align-items-start pb-5">
                        <i class="fas fa-quote-left"></i>&nbsp;
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eum, vel, fugit vitae, nesciunt rem necessitatibus nobis aliquid quibusdam rerum iste quo! Ducimus eius nihil, quisquam optio facere reiciendis culpa.</p>
                        <a href="./consultoria.php" class="btn-about">Conoce sus historias&nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Arrows -->
    <button class="prev">←</button>
    <button class="next">→</button>
</div>

<script>
    const sliderContainer = document.querySelector('.slider-container');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');

    let currentIndex = 0;

    function updateSlider() {
        const offset = -currentIndex * 100; // Mover al slide correspondiente
        sliderContainer.style.transform = `translateX(${offset}%)`;
    }

    // Botón para ir al slide anterior
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
        updateSlider();
    });

    // Botón para ir al siguiente slide
    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
        updateSlider();
    });
</script>
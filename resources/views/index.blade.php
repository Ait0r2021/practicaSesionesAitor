@extends("base")
@section("container")
 <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Carmelo City!</div>
                <div class="masthead-heading text-uppercase">Welcome to the PHP world</div>
                <a class="btn btn-primary btn-x2 text-uppercase" href="{{ url('resource') }}">Mostrar todos</a>
            </div>
        </header>
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Cosas</h2>
                    <h3 class="section-subheading text-muted">Hello hello hello hello</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola</p>
                    </div>
                </div>
            </div>
        </section>
@endsection

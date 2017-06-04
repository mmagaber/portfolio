
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
@include('layout.head')


<body>

<!-- Navigation -->
@include('layout.nav')

<!-- Header -->

 @include('layout.header')


<!-- About Section -->
@include('home_content.about')

<!-- Services Section -->
@include('home_content.services')


<!-- Portfolio Grid Section -->
@include('home_content.portfolio')


{{--footer--}}
@include('layout.footer')


<!-- Portfolio Modals -->
<!-- Use the modals below to show case details about the portfolio projects! -->

<!-- Portfolio Modal 1 -->
@include('home_content.portfolio-projects.portfolio-model1')


<!-- Portfolio Modal 2 -->
@include('home_content.portfolio-projects.portfolio-model2')

<!-- Portfolio Modal 3 -->
@include('home_content.portfolio-projects.portfolio-model3')

<!-- Portfolio Modal 4 -->
@include('home_content.portfolio-projects.portfolio-model4')

<!-- Portfolio Modal 5 -->
@include('home_content.portfolio-projects.portfolio-model5')

<!-- Portfolio Modal 6 -->
@include('home_content.portfolio-projects.portfolio-model6')


</body>

</html>

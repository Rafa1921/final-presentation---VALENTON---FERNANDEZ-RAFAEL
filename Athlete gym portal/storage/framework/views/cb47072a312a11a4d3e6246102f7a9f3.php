<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindGym | About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Sticky Navbar */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        #about-us, #contact-us {
            padding: 50px 0;
        }

        #about-us h1, #contact-us h1 {
            font-size: 36px;
            font-weight: bold;
            color: #2c3e50;
        }

        .section-title {
            font-size: 28px;
            margin-bottom: 20px;
            color: #3498db;
        }

        #about-us p, #contact-us p {
            font-size: 16px;
            line-height: 1.5;
            color: #7f8c8d;
        }

        .contact-info {
            font-size: 16px;
            color: #7f8c8d;
        }
        .contact-info i {
            color: #3498db;
            margin-right: 10px;
        }

        .form-group input, .form-group textarea {
            border-radius: 5px;
            padding: 15px;
            width: 100%;
            border: 1px solid #ccc;
        }

        .navbar-nav a {
            font-size: 18px;
        }
    </style>
</head>
<body>

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


    <!-- About Us Section -->
    <div class="container" id="about-us">
        <h1 class="text-center mb-4">About Us</h1>
         <!-- Image added here -->
         <img src="https://www.hilton.com/im/en/GLOCHDI/1816113/gym.jpg?impolicy=crop&cw=4508&ch=2406&gravity=NorthWest&xposition=0&yposition=296&rw=768&rh=410" alt="MindGym Image" class="about-image">
        <p>At MindGym, we believe that fitness is not just about physical strength, but also about mental and emotional well-being. Founded in 2020, our gym is designed to provide a welcoming and inclusive space for individuals of all fitness levels. Whether you’re just starting out or looking to take your workouts to the next level, we offer a variety of fitness programs tailored to your needs. Our highly skilled trainers are here to guide you through every step of your fitness journey.</p>
        <p>Our mission is simple: to build stronger bodies and a stronger community. MindGym is a place where people from all walks of life come together to improve their health, build friendships, and achieve their personal fitness goals. We believe that fitness is not just a physical journey, but a mental one as well. Our supportive community is here to help you every step of the way, whether you’re here for weight loss, strength training, or simply a healthier lifestyle.</p>
        <p>Join us today and start your journey towards becoming the best version of yourself!</p>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

</body>
</html>
<?php /**PATH C:\Users\gbrls\Documents\Gym Portal Dec 2024\Athlete gym portal\resources\views/guest/about.blade.php ENDPATH**/ ?>
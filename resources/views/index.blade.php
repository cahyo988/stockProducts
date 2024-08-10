<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('layouts.navbar')
    <div class="container mx-auto px-4 mt-10 flex flex-col lg:flex-row">
        <div class="flex-1 lg:flex-none lg:w-1/2 mb-6 lg:mb-0">
            <img src="/assets/home-pict.jpg" alt="Pict Home" width="500" class="rounded">
        </div>
        <div class="flex-1 lg:flex-none lg:w-1/2 p-5 shadow-xl">
            <h1 class="text-xl md:text-4xl mb-6"><strong>Selamat Datang di GudangStock</strong></h1>
            <ul class="space-y-4">
                <li>
                    <strong>Kualitas Terjamin:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum quisquam facere ipsam repellat debitis assumenda natus sit placeat! Temporibus neque veniam itaque nisi facere aliquid ipsa, obcaecati vel inventore molestiae autem ullam reiciendis earum nemo excepturi dolores placeat dolorum pariatur saepe aut dicta alias. Itaque, possimus tempora qui sapiente vero atque maxime est natus corrupti quam magni odit consectetur nostrum. Accusantium suscipit voluptatibus aliquam. Nobis ipsum omnis eaque dignissimos explicabo in atque, voluptates asperiores maxime id voluptate. Delectus, illo. Sunt dolorum placeat ducimus ab voluptatem animi voluptates amet facere, ad magni nulla laudantium maxime non unde quae iure numquam iste, tempora repellat, eligendi alias sed fuga enim? Qui, dolores numquam ipsum temporibus delectus rem blanditiis dolorem, suscipit iusto quos, voluptate eum labore harum. Mollitia porro minus ut dignissimos quos, excepturi facere necessitatibus, voluptatem eos praesentium id natus ipsum eaque voluptate quo voluptatibus veniam quidem.
                </li>
                <li>
                    <strong>Pelacakan Real-Time:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum repudiandae animi impedit.
                </li>
                <li>
                    <strong>Kualitas Terjamin:</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda consequuntur voluptatum placeat nisi natus.
                </li>
            </ul>
            <div class="mt-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.30286817232601!2d112.76388844540367!3d-7.371164246433482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e52664194295%3A0xae3e5c1bccd9c9e6!2sCAK%20HERI%20SATE%20AYAM%20%26%20KAMBING!5e0!3m2!1sid!2sid!4v1723111746865!5m2!1sid!2sid"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="border-b rounded-sm"></iframe>
            </div>
        </div>
    </div>
</body>

</html>

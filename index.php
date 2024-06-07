<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Capacity Brewing</title>
    <script>document.documentElement.classList.add('js')</script>
    
</head>
<body>
    <section style="background-image:url(./img/bg-black-paper.png)" class="bg-[url('./img/bg-black-paper.png')] bg-no-repeat bg-cover py-20 md:py-40">
        <div class="md:h-[80vh] flex items-center justify-center">
            <div class="md:relative">
                <img loading="laxy" class="mt-10 md:mt-0 w-4/5 md:w-3/5 mb-20 md:mb-40 mx-auto delay-[300ms] duration-[600ms] taos:translate-y-[100px] taos:opacity-0" data-taos-offset="300" src="./img/logo.svg" alt="">
                <img loading="laxy" class="w-4/5 md:w-2/4 mx-auto delay-[500ms] duration-[600ms] taos:translate-y-[100px] taos:opacity-0" data-taos-offset="300" src="./img/flags.png" alt="">
                <a href="#div2"><img loading="laxy" class="hidden md:block absolute -right-14 bottom-0 animate-bounce delay-[700ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0" data-taos-offset="300" src="./img/downarrow.svg" alt=""></a>
            </div>
        </div>
        <div class="flex flex-col md:flex-row mt-20 md:mt-40" id="div2">
            <img loading="laxy" class="w-10/12 md:w-4/12 block delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="400" src="./img/ipad.png" alt="">
            <div class="w-10/12 mx-auto md:w-1/2 md:ml-16 mt-10 delay-[300ms] duration-[600ms] taos:translate-y-[100px] taos:opacity-0 max-w-[700px]" data-taos-offset="300">
                <img src="./img/headline1.svg" alt="">
                <p class="font-body text-white mt-10 md:text-xl tracking-wider ">Born in Southern California… brewed in America… for all to enjoy.</p>
                <p class="font-body text-white mt-10 md:text-xl tracking-wider ">We are turning up the volume on taste and brewing the best 0.5% NA-CRAFT BEER in the market.</p>
                <p class="font-body text-white mt-10 md:text-xl tracking-wider ">Sometimes it’s better to throttle back.. take your foot off the gas pedal and level up. So when the moment presents itself…stay in the mix while still enjoying your favorite NA-CRAFT BEER from CAPACITY BREWING CO.</p>
                <p class="font-body text-white mt-10 md:text-xl tracking-wider uppercase">// sign up & be the first to know.</p>
                <div class="klaviyo-form-WSKiU7"></div>
            </div>
        </div>
    </section>
    <section style="background-image:url(./img/bg-white-paper.jpg)" class="bg-[url('/img/bg-white-paper.jpg')] bg-no-repeat bg-cover py-5  md:pt-40 md:pb-10">
        <div class="flex flex-col-reverse md:flex-row md:justify-end items-center my-10">
            <div class="w-10/12 md:w-[500px] md:mr-28 md:h-full md:space-y-24">
                <img loading="laxy" class="block mx-auto  my-16 md:my-0 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="400" src="./img/beer.png" alt="">
                <a class="block" href="http://instagram.com/capacitybrewing" target="_blank">
                    <img loading="laxy" class="block delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="400" src="./img/follow.png" alt="">
                </a>
            </div>
           <img loading="laxy" class="mx-auto md:mx-0 w-10/12 md:w-6/12 block delay-[300ms] duration-[600ms] taos:translate-x-[200px] taos:opacity-0" data-taos-offset="400" src="./img/beercans.png" alt="">
        </div>
        <div class="text-center">
            <img loading="laxy" class="block mx-auto" src="./img/eagle.svg" alt="">
            <p class="font-body uppercase mt-5">© <?php echo date("Y");?> capacity BREWING company llc.</p>
        </div>
    </section>
    <script async type="text/javascript" src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=Xcjqi7"></script>
    <script src="https://unpkg.com/taos@1.0.3/dist/taos.js"></script>
</body>
</html>
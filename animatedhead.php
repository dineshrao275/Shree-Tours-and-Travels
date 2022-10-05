<!DOCTYPE html>
<html lang="en">
<head>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js">
</script>
    <style>
    .ml2 {
  font-weight: 900;
  font-size: 50px;
}

.ml2 .letter {
  display: inline-block;
  line-height: 1em;
}

    </style>
    

</head>
<body>
<h1 class="ml2">SHREE TOURS & TRAVELS</h1>

<script>
        var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 1,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

    </script>
</body>
</html> 

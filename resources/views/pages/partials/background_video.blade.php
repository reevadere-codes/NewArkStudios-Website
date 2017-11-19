
<link rel="stylesheet" href="{{ URL::asset('css/app/partials/background_video.css') }}" />
<!-- screenshot if video fails -->
<video poster="{{$screenshot}}" id="bgvid" playsinline autoplay muted loop>
<!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<source src="{{$webm}}" type="video/webm">
<source src="{{$mp4}}" type="video/mp4">
</video>
<div id="polina">
    <h1>Polina</h1>
    <p>filmed by Alexander Wagner 2011
    <p><a href="http://thenewcode.com/777/Create-Fullscreen-HTML5-Page-Background-Video">original article</a>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porta dictum turpis, eu mollis justo gravida ac. Proin non eros blandit, rutrum est a, cursus quam. Nam ultricies, velit ac suscipit vehicula, turpis eros sollicitudin lacus, at convallis mauris magna non justo. Etiam et suscipit elit. Morbi eu ornare nulla, sit amet ornare est. Sed vehicula ipsum a mattis dapibus. Etiam volutpat vel enim at auctor.</p>
    <p>Aenean pharetra convallis pellentesque. Vestibulum et metus lectus. Nunc consectetur, ipsum in viverra eleifend, erat erat ultricies felis, at ultricies mi massa eu ligula. Suspendisse in justo dapibus metus sollicitudin ultrices id sed nisl.</p>
    <button>Pause</button>
</div>
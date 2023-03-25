<div id="mobile-menu">
    <ul>
        <li><a href="="{{route('home.get')}}">Home</a> </li>
        <li><a href="="{{route('about.get')}}">About Us</a> </li>
        <li><a href="#">Products</a>
            <ul>
                @foreach ($categories as $item)
                <li><a href="{{route('prodcucts.get', $item->id)}}">{{$item->name}}</a> </li>
                @endforeach
            </ul>
        </li>

        <li><a href="="{{route('contact.get')}}">Contact Us</a> </li>
    </ul>
</div>

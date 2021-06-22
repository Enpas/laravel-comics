@extends('layouts.main')

@section('content')
  
  <div class="banner">
    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
  </div>

  <main class="comic">
    
    <section class="comic-desc">

      <div class="text-descriprion">

        <h2>Action comics #1000: the deluxe edition</h2>

        <div class="price-availability">
          <div class="price">
            <span>U.S. price: <strong>$19.99</strong></span>
            <span>Available</span>
          </div>
          <div class="availability">
            <span>Check availability</span>
          </div>
        </div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut vitae rerum error numquam commodi, suscipit, molestiae perspiciatis nostrum optio vero odio, dolore quibusdam! Earum illo odio officiis laborum, eius eligendi dignissimos, ipsa quaerat quasi ab possimus aperiam provident voluptatem repudiandae tenetur distinctio veritatis repellendus molestiae ducimus blanditiis explicabo cupiditate eos? Aut, iure nisi? Incidunt vitae non accusamus quia dicta quibusdam voluptas, beatae nesciunt laudantium obcaecati voluptates veritatis aliquid neque hic nam aut minus quisquam et quod fugit! Veniam consequuntur dolore ullam ea consectetur fuga quidem rerum esse, corrupti quibusdam, magnam ducimus! Alias doloribus quam rem quisquam aut quia similique quis!</p>

      </div>

      <div class="adv">
        <p>Advertisement</p>
        <img src="{{ asset('img/adv.jpg') }}" alt="Adv Comic">
      </div>
      
    </section>

    <section class="comic-info">

      <div class="tables-container">

        <div class="table">
          <h3>Talent</h3>
          <div class="row">
            <span>Art by:</span>
            <span>
              <a href="#">artist</a>
            </span>
          </div>
          <div class="row">
            <span>Written by:</span>
            <span>
              <a href="#">writer</a>
            </span>
          </div>
        </div>

        <div class="table">
          <h3>Specs</h3>
          <div class="row">
            <span>Series:</span>
            <span>
              <a href="#">serie</a>
            </span>
          </div>
          <div class="row">
            <span>U.S. Price:</span>
            <span>price</span>
          </div>
          <div class="row">
            <span>On sale date:</span>
            <span>date</span>
          </div>
        </div>

      </div>

    </section>

  </main>


@endsection
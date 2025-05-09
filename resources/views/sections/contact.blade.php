<!-- contact section -->
<section class="section" id="contact">
    <div class="container text-center">
        <p class="section-subtitle">How can you communicate?</p>
        <h6 class="section-title mb-5">Contact Me</h6>
        <!-- contact form -->
        <!--@if ($errors->any())
            <div class="alert alert-danger">
                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>
            </div>
        @endif-->

        <form  action="/contact" method="POST" class="contact-form col-md-10 col-lg-8 m-auto">
            @csrf
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <input type="text" name="name" size="50" class="form-control @error('name') isinvalid @enderror"  placeholder="Your Name" required value="{{ old('name') }}">
                    @error('name')
                        <div class="Invalid-feedback section-subtitle">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-sm-6">
                    <input type="email" name="email" class="form-control @error('email') isinvalid @enderror" placeholder="Enter Email" requried value="{{ old('email') }}">
                    @error('email')
                        <div class="Invalid-feedback section-subtitle">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-sm-12">
                    <textarea name="content" id="comment" rows="6" class="form-control @error('content') isinvalid @enderror"
                        placeholder="Write Something" value= {{ old('content') }}></textarea>
                    @error('content')
                    <div class="Invalid-feedback section-subtitle">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-sm-12 mt-3">
                    <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
                </div>
            </div>
        </form><!-- end of contact form -->
    </div><!-- end of container -->
</section><!-- end of contact section -->

<x-app-layout>
    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12">
              <div class="card">
                 <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                       <h4 class="card-title">Basic Quill Editor</h4>
                    </div>
                 </div>
                 <div class="card-body">
                    <div id="editor"></div>
                 </div>
              </div>
           </div>
           <div class="col-lg-12">
              <div class="card">
                 <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                       <h4 class="card-title">Custom Select</h4>
                    </div>
                 </div>
                 <div class="card-body">
                    <div id="content-container">
                          <div id="quill-tool">
                             <button class="ql-bold" data-toggle="tooltip" data-placement="bottom" title="Bold"></button>
                             <button class="ql-underline" data-toggle="tooltip" data-placement="bottom" title="Underline"></button>
                             <button class="ql-italic" data-toggle="tooltip" data-placement="bottom" title="Add italic text <cmd+i>"></button>
                             <button class="ql-image" data-toggle="tooltip" data-placement="bottom" title="Upload image"></button>
                             <button class="ql-code-block" data-toggle="tooltip" data-placement="bottom" title="Show code"></button>
                          </div>
                          <div id="quill-toolbar">
                             <h1>This is a heading text...</h1>
                             <br/>
                             <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui arcu, pellentesque id mattis sed, mattis semper erat. Etiam commodo arcu a mollis consequat. Curabitur pretium auctor tortor, bibendum placerat elit feugiat et. Ut ac turpis nec dui ullamcorper ornare. Vestibulum finibus quis magna at accumsan. Praesent a purus vitae tortor fringilla tempus vel non purus. Suspendisse eleifend nibh porta dolor ullamcorper laoreet. Ut sit amet ipsum vitae lectus pharetra tincidunt. In ipsum quam, iaculis at erat ut, fermentum efficitur ipsum. Nunc odio diam, fringilla in auctor et, scelerisque at lorem. Sed convallis tempor dolor eu dictum. Cras ornare ornare imperdiet. Pellentesque sagittis lacus non libero fringilla faucibus. Aenean ullamcorper enim et metus vestibulum, eu aliquam nunc placerat. Praesent fringilla dolor sit amet leo pulvinar semper. </p>
                          </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
</x-app-layout>

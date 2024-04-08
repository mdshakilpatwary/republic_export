<?php
use App\Models\PageElement;
?>

@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Home Industrial</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Industrial</li>
        <li class="breadcrumb-item ">Element</li>
        <li class="breadcrumb-item active">Info</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Home Industrial Element</h5>
  

                <!-- update Form Elements -->
                @if(PageElement::where('type','=',1)->first())
                    @php
                    $elements = PageElement::where('type','=',1)->first();
                    $contentArray =json_decode($elements->content, true);                     
                    @endphp
                    <form method="POST" action="{{route('home.industrial.update',$elements->type)}}" enctype="multipart/form-data" class="needs-validation" novalidate="">
                    @csrf
                      <div class="row mb-3">
                          
                          <div class="offset-md-1 offset-lg-1 col-md-10 col-lg-10 col-12 col-sm-12">
    
                            
                            <div class="row">
                                <div class="col-md-12 col-xl-12 col-lg-12 col-12 col-sm-12">
                                    <table class="table" id="elementTable">
                                      
                                    @foreach ($contentArray['contentTitle'] as $key => $title)
                                        <tr class="row_one">
                                            <td>
                                                <div class="form-group">
                                                    <label for="elementTitle">Element Title</label>
                                                    <input type="text" name="elementTitle[]" class="form-control" value="{{ $title }}" required>
                                                    <div class="invalid-feedback">Please enter your title.</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="elementText">Text</label>
                                                    <input type="text" name="elementText[]" class="form-control" value="{{ $contentArray['contentText'][$key] }}" required>
                                                    <div class="invalid-feedback">Please enter your content.</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="elementImage">Image <span style="color: #6b6868">(resolution 300x250 )</span></label>
                                                    <input type="hidden" id="elementImageName" name="{{$contentArray['contentImage'][$key] ==null ? '' : 'elementImage' }}[]" value="{{$contentArray['contentImage'][$key]}}">
                                                    <input type="file" name="elementImage[]" id="elementImage" class="form-control"  {{$contentArray['contentImage'][$key] ==null ? 'required' : '' }} >
                                                    <div class="invalid-feedback">Please input your png image</div>
                                    
                                                    <img src="{{ asset('uploads/element/' . $contentArray['contentImage'][$key]) }}" alt="" width="100">
                                                </div>
                                            </td>
                                            
                                            <td class="">
                                                <div style="display: flex; justify-content: center; align-items: center; margin-top: 26px;">
                                                    <span class="addElement btn btn-info btn-sm" style="font-size: 16px; padding: 1px 3px; margin: 0 1px;"><i class="addElement bi bi-plus-lg"></i></span>
                                                    <span class="removeElement btn btn-secondary btn-sm" style="font-size: 16px; padding: 1px 3px; margin: 0;"><i class="removeElement bi bi-dash-lg"></i></span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                       
                                    </table>
                                    
                                    
                                    
                                </div>
                            </div>
    
                            <div class="submit_button_align" style="text-align: right;">
                                <button type="submit" class="btn btn-success btn-lg">Save</button>
                            </div>
                        </div>
                        
                      </div>
    
      
                    </form>
                    <!-- End update Form Elements -->
                    @else 
                  <!-- insert Form Elements -->
                        <form method="POST" action="{{route('home.industrial.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate="">
                        @csrf
                            <div class="row mb-3">
                            
                            <div class="offset-md-1 offset-lg-1 col-md-10 col-lg-10 col-12 col-sm-12">
        
                                
                                <div class="row">
                                    <div class="col-md-12 col-xl-12 col-lg-12 col-12 col-sm-12">
                                        <table class="table" id="elementTable">
                                            <tr class="row_one">
                                                <td>
                                                    <div class="form-group">
                                                        <label for="elementTitle">Element Title</label>
                                                        <input type="text" name="elementTitle[]" class="form-control" required>
                                                        <div class="invalid-feedback">Please enter your title.</div>
                                                    
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="elementText">Text</label>
                                                        <input type="text" name="elementText[]" class="form-control" required >
                                                        <div class="invalid-feedback">Please enter your content.</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="elementImage">Image <span style="color: #6b6868">(resolution 300x250 )</span></label>
                                                        <input type="file" name="elementImage[]" class="form-control" required>
                                                        <div class="invalid-feedback">Please input your png image</div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div style="display: flex; justify-content: center; align-items: center;   margin-top: 26px;">
                                                        <span class="addElement btn btn-info btn-sm" style="font-size: 16px; padding: 1px 3px; margin: 0 1px;"><i class="addElement bi bi-plus-lg"></i></span>
                                                        <span class="removeElement btn btn-secondary btn-sm" style="font-size: 16px; padding: 1px 3px; margin: 0;"><i class="removeElement bi bi-dash-lg"></i></span>
                                                    </div>
                        
                                                </td>
                                            </tr>
                                        
                                        </table>
                                        
                                        
                                        
                                    </div>
                                </div>
        
                                <div class="submit_button_align" style="text-align: right;">
                                    <button type="submit" class="btn btn-success btn-lg">Add</button>
                                </div>
                            </div>
                            
                        </div>
        
        
                        </form>
                    <!-- End header Form Elements -->
                    @endif
  
              </div>
            </div>
  
          </div>
    </div>


  
  </section>
    
  <script>
document.addEventListener('DOMContentLoaded', function() {
    // Add event listener for "add" buttons
    document.getElementById('elementTable').addEventListener('click', function(event) {
        if (event.target.classList.contains('addElement')) {
            var addButton = event.target;

            var row = addButton.closest('tr');
            var clone = row.cloneNode(true);

            // Clear input values in the cloned row
            clone.querySelectorAll('input[type="text"], input[type="hidden"]').forEach(function(input) {
                input.value = '';
            });

            // Reset file input value
            clone.querySelectorAll('input[type="file"]').forEach(function(input) {
                input.value = null;
                input.removeAttribute('required'); // Temporarily remove the required attribute
            });

            // Clear img src attribute in the cloned row
            clone.querySelectorAll('img').forEach(function(img) {
                img.src = ''; // or set a default placeholder image
            });

            // Append the cloned row after the current row
            row.parentNode.insertBefore(clone, row.nextSibling);

            // Reapply the required attribute to file input after a short delay
            setTimeout(function() {
                clone.querySelectorAll('input[type="file"]').forEach(function(input) {
                    input.setAttribute('required', ''); // Reapply the required attribute
                });
            }, 100);
        }
    });

    // Add event listener for "remove" buttons (delegated to the parent element)
    document.getElementById('elementTable').addEventListener('click', function(event) {
        if (event.target.classList.contains('removeElement')) {
            var removeButton = event.target;
            var row = removeButton.closest('tr');

            // Check if the row being removed is not the first row
            if (row.previousElementSibling) {
                row.parentNode.removeChild(row);
            }
        }
    });
});




$(document).ready(function() {
        // Set the default value of the file input field based on the hidden input
        $('#elementImage').val($('#elementImageName').val());
        
        // Listen for changes in the file input field
        $('#elementImage').change(function() {
            // If a new file is selected, update the hidden input value
            if ($(this).val()) {
                $('#Name').val($(this).val());
            }
        });
    });


  </script>
@endsection
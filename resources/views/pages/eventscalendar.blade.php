<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@include('templates.header')

<meta name="csrf-token" content="{{ csrf_token() }}" />


<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

   
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Event Calendar</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            
                            <li class="breadcrumb-item active">Event Calendar</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                
                <div class="row">

                    <div class="col-xl-3">
                        <div class="card card-h-100">
                            <div class="card-body" style="display:flex; justify-content:center; align-items:center;">
                            <button type="button" class="btn btn-info add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalExample"><i class="ri-add-line align-bottom me-1"> Create Event</i></button>
                                        <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                             </div>


                             
                        </div>
                        <div class="card">
                            <div class="card-body bg-info-subtle">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i data-feather="calendar" class="text-info icon-dual-info"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="fs-15">Welcome to your Calendar!</h6>
                                        <p class="text-muted mb-0">Scheduled events will appear here.</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Upcoming Events</h5>
                                <p class="text-muted">Don't miss scheduled events</p>
                                    <div class="pe-2 me-n1 mb-3 simplebar-scrollable-y" data-simplebar="init" style="height: 400px"><div class="simplebar-wrapper" style="margin: 0px -8px 0px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 8px 0px 0px;">
                                        <div id="upcoming-event-list"><div class="card mb-3">                        
                                            <div class="card-body">                            
                                                <div class="d-flex mb-3">                                
                                                    <div class="flex-grow-1">
                                                        <i class="mdi mdi-checkbox-blank-circle me-2 text-info">

                                                        </i><span class="fw-medium">4 Jan 2022 </span></div>                                
                                                        <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">8:00 AM to 12:00 AM</small>
                                                    </div>
                                                                                </div>                            
                                                                                <h6 class="card-title fs-16"> World Braille Day</h6>                            
                                                                                <p class="text-muted text-truncate-two-lines mb-0"> </p>                        
                                                                            </div>                    
                                                                        </div>
                                                                        <div class="card mb-3">                        
                                                                                <div class="card-body">                            
                                                                                    <div class="d-flex mb-3">                                
                                                                                        <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">30 Jan 2022 </span>
                                                                                    </div>                               
                                                                                     <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">8:00 AM to 12:00 AM</small>
                                                                                    </div>                           
                                                                                 </div>                            
                                                                                 <h6 class="card-title fs-16"> World Leprosy Day</h6>                            
                                                                                 <p class="text-muted text-truncate-two-lines mb-0"> </p>                        
                                                                                </div>                   
                                                                             </div><div class="card mb-3">                        
                                                                                    <div class="card-body">                           
                                                                                         <div class="d-flex mb-3">                               
                                                                                             <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i>
                                                                                             <span class="fw-medium">21 Feb 2022 </span>
                                                                                            </div>                               
                                                                                             <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">8:00 AM to 12:00 AM</small>
                                                                                            </div>                           
                                                                                         </div>                           
                                                                                          <h6 class="card-title fs-16"> International Mother Language Day</h6>                            
                                                                                          <p class="text-muted text-truncate-two-lines mb-0"> </p>                        
                                                                                        </div>                    
                                                                                    </div><div class="card mb-3">                        
                                                                                        <div class="card-body">                            
                                                                                            <div class="d-flex mb-3">                               
                                                                                                 <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i>
                                                                                                 <span class="fw-medium">22 Feb 2022 </span></div>                                
                                                                                                 <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">8:00 AM to 12:00 AM</small>
                                                                                                </div>                           
                                                                                             </div>                          
                                                                                               <h6 class="card-title fs-16"> World Thinking Day</h6>                          
                                                                                                 <p class="text-muted text-truncate-two-lines mb-0"> </p>                        
                                                                                                </div>                    </div><div class="card mb-3">                        
                                                                                                    <div class="card-body">                           
                                                                                                         <div class="d-flex mb-3">                                
                                                                                                            <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i>
                                                                                                            <span class="fw-medium">8 Mar 2022 </span>
                                                                                                        </div>                                
                                                                                                        <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">8:00 AM to 12:00 AM</small>
                                                                                                    </div>                            
                                                                                                </div>                           
                                                                                                <h6 class="card-title fs-16"> International Women's Day</h6>                            
                                                                                                <p class="text-muted text-truncate-two-lines mb-0"> </p>                  
                                                                                                  
                                                                                            </div>                  
                                                                                         </div>
                                                                                         <div class="card mb-3">                       
                                                                                             <div class="card-body">                           
                                                                                                 <div class="d-flex mb-3">                           
                                                                                                         <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i>
                                                                                                         <span class="fw-medium">21 Mar 2022 </span>
                                                                                                        </div>                               
                                                                                                         <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">8:00 AM to 12:00 AM</small>
                                                                                                        </div>                          
                                                                                                      </div>                           
                                                                                                       <h6 class="card-title fs-16"> International Mother Language Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">22 Mar 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">8:00 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> World Water Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">7 Apr 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">8:00 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> World Health Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">16 Apr 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">8:00 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> International Special Librarians Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">22 Apr 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">8:00 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> Earth Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-primary"></i><span class="fw-medium">1 Jan 2024 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">Full day event</small></div>                            </div>                            <h6 class="card-title fs-16"> All Day Event</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> An all-day event is an event that lasts an entire day or longer</p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-warning"></i><span class="fw-medium">19 Jan 2024 to 21 Jan 2024 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">Full day event</small></div>                            </div>                            <h6 class="card-title fs-16"> Visit Online Course</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> Long Term Event means an incident that last longer than 12 hours.</p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-success"></i><span class="fw-medium">24 Jan 2024 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">12:30 PM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> Meeting With Designer</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> Tell how to boost website traffic</p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-success"></i><span class="fw-medium">25 Jan 2024 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">7:00 PM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> Birthday Party</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> Family slumber party – Bring out the blankets and pillows and have a family slumber party! Play silly party games, share special snacks and wind down the fun with a special movie.</p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-dark"></i><span class="fw-medium">28 Jan 2024 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">Full day event</small></div>                            </div>                            <h6 class="card-title fs-16"> Click for Google</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-primary"></i><span class="fw-medium">28 Jan 2024 to 1 Feb 2024 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">Full day event</small></div>                            </div>                            <h6 class="card-title fs-16"> Repeating Event</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> A recurring or repeating event is simply any event that you will occur more than once on your calendar. </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-danger"></i><span class="fw-medium">2 Feb 2024 to 3 Feb 2024 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">Full day event</small></div>                            </div>                            <h6 class="card-title fs-16"> Weekly Strategy Planning</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> Strategies for Creating Your Weekly Schedule</p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-danger"></i><span class="fw-medium">15 Feb 2024 to 16 Feb 2024 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">8:00 PM to 4:00 PM</small></div>                            </div>                            <h6 class="card-title fs-16"> Client Meeting with Alexis</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> A meeting is a gathering of two or more people that has been convened for the purpose of achieving a common goal through verbal interaction, such as sharing information or reaching agreement.</p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">16 Feb 2024 </span></div>                                <div class="flex-shrink-0"><small class="badge bg-primary-subtle text-primary ms-auto">8:00 PM to 4:00 PM</small></div>                            </div>                            <h6 class="card-title fs-16"> Velzon Project Discussion with Team</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> Tell how to boost website traffic</p>                        </div>                    </div></div>
                                        </div></div></div></div><div class="simplebar-placeholder" style="width: 661px; height: 2289px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 69px; display: block; transform: translate3d(0px, 200px, 0px);"></div></div></div>
                                    </div>
                        <div>
                            <h5 class="mb-1">Scheduled Events</h5>
                            <p class="text-muted">Don't miss scheduled events.</p>
                            <div class="pe-2 me-n1 mb-3" data-simplebar style="height: 650px">
                                <div id="upcoming-event-list"></div>
                            </div>
                        </div>
                        
                        
                        <!--end card-->
                        
                    </div> <!-- end col-->

                    
                    
           


<!-- ============================================================ -->
                    <div class="col-xl-9">
                        
                    <div class="input-group mb-3">
                        <input type="text" id="searchInput" class="form-control" placeholder="Search events">
                            <div class="input-group-append">
                                <button id="searchButton" class="btn btn-primary">{{__('Search')}}</button>
                            </div>
                    </div>

                        <div class="card card-h-100">
                            <div class="card-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!--end row-->

<!-- ============================================================ -->
                <div style='clear:both'></div>

                <!-- Add New Event MODAL -->
                     <!--Create Supplier Modal-->
                     <div class="modal fade" id="showModalExample" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light p-3">
                                            <h5 class="modal-title" id="exampleModalLabel">&nbsp;</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                        </div>
                                        <form method="post" action="{{ URL('/create-schedule') }}"  id="form-event">
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" id="id-field" />

                                                <input type="text" id="orderId" class="form-control" placeholder="ID" readonly hidden />

                                                <div class="mb-3">
                                                    <label for="customername-field" class="form-label">Event Name</label>
                                                    <input type="text" name="title" id="customername-field" class="form-control" placeholder="Enter name" required />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="start-datepicker" class="form-label">Start</label>
                                                    <input type="text" name="start" id="start-datepicker" class="form-control" />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="end-datepicker" class="form-label">End</label>
                                                    <input type="text" name="end" id="end-datepicker" class="form-control" />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Location</label>
                                                    <input type="text" name="location" id="customername-field" class="form-control" placeholder="Enter Contact" required />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Email</label>
                                                    <input type="text" name="email" id="description" class="form-control" placeholder="Enter Email" required />
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info">Add Supplier</button>
                                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end modal-->
                <!-- end modal-->
            </div>
        </div> <!-- end row-->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>


    <script type="text/javascript">
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var calendarEl = document.getElementById('calendar');
        var events = [];
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            initialView: 'dayGridMonth',
            timeZone: 'UTC',
            events: '/events',
            editable: true,

            // Deleting The Event
            eventContent: function(info) {
                var eventTitle = info.event.title;
                var eventElement = document.createElement('div');
                eventElement.innerHTML = '<span style="cursor: pointer;">❌</span> ' + eventTitle;

                eventElement.querySelector('span').addEventListener('click', function() {
                    if (confirm("Are you sure you want to delete this event?")) {
                        var eventId = info.event.id;
                        $.ajax({
                            method: 'DELETE',
                            url: '/schedule/' + eventId,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                console.log('Event deleted successfully.');
                                calendar.refetchEvents(); // Refresh events after deletion
                            },
                            error: function(error) {
                                console.error('Error deleting event:', error);
                            }
                        });
                    }
                });
                return {
                    domNodes: [eventElement]
                };
            },

            // Drag And Drop

            eventDrop: function(info) {
                var eventId = info.event.id;
                var newStartDate = info.event.start;
                var newEndDate = info.event.end || newStartDate;
                var newStartDateUTC = newStartDate.toISOString().slice(0, 10);
                var newEndDateUTC = newEndDate.toISOString().slice(0, 10);

                $.ajax({
                    method: 'PUT',
                    url: `/schedule/${eventId}`,
                    data: {
                        start_date: newStartDateUTC,
                        end_date: newEndDateUTC,
                    },
                    success: function() {
                        console.log('Event moved successfully.');
                    },
                    error: function(error) {
                        console.error('Error moving event:', error);
                    }
                });
            },

            // Event Resizing
            eventResize: function(info) {
                var eventId = info.event.id;
                var newEndDate = info.event.end;
                var newEndDateUTC = newEndDate.toISOString().slice(0, 10);

                $.ajax({
                    method: 'PUT',
                    url: `/schedule/${eventId}/resize`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        end_date: newEndDateUTC
                    },
                    success: function() {
                        console.log('Event resized successfully.');
                    },
                    error: function(error) {
                        console.error('Error resizing event:', error);
                    }
                });
            },
        });

        calendar.render();

        document.getElementById('searchButton').addEventListener('click', function() {
            var searchKeywords = document.getElementById('searchInput').value.toLowerCase();
            filterAndDisplayEvents(searchKeywords);
        });


        function filterAndDisplayEvents(searchKeywords) {
            $.ajax({
                method: 'GET',
                url: `/events/search?title=${searchKeywords}`,
                success: function(response) {
                    calendar.removeAllEvents();
                    calendar.addEventSource(response);
                },
                error: function(error) {
                    console.error('Error searching events:', error);
                }
            });
        }


       
        flatpickr("#datepicker", {
      enableTime: true, // Enable time selection
      dateFormat: "Y-m-d H:i", // Date and time format
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
    // Initialize flatpickr
    flatpickr("#start-datepicker", {
      enableTime: true, // Enable time selection
      dateFormat: "Y-m-d H:i", // Date and time format
    });
    flatpickr("#end-datepicker", {
      enableTime: true, // Enable time selection
      dateFormat: "Y-m-d H:i", // Date and time format
    });

   
  </script>

@include('templates.footer')
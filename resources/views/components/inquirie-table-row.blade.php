<div>
    <tr>
        <td>
            <div class="d-flex align-items-center">
                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px"
                    class="rounded-circle" />
                <div class="ms-3">
                    <p class="fw-bold mb-1">{{ $inquirie->name }}</p>
                    <p class="text-muted mb-0">{{ $inquirie->email }}</p>
                </div>
            </div>
        </td>
        <td>
            <p class="fw-normal mb-1">{{ $inquirie->subject }}</p>
        </td>
        <td>
            @if (!$inquirie->user_id)
                <p>Unregisterd user</p>
                {{-- mewage customizess karapan --}}
            @else
                <p>Registerd user</p>
            @endif
        </td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#Model{{ $inquirie->id }}">View</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#DeleteModel{{ $inquirie->id }}">Delete</button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Model{{ $inquirie->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="Model{{ $inquirie->id }}Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="Model{{ $inquirie->id }}Label">Inquirie by
                                {{ $inquirie->name }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="mailto:{{ $inquirie->email }}" method="get" enctype="text/plain">
                            <div class="modal-body">

                                <input type="text" id="subject" name="subject"
                                    value="Responce to {{ $inquirie->subject }}" hidden>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name"
                                        value="{{ $inquirie->email }}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Subject:</label>
                                    <input type="text" class="form-control" id="Subject-text"
                                        value="{{ $inquirie->subject }}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text" rows="5" disabled>{{ $inquirie->message }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Response</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Delete Modal -->
            <div class="modal fade" id="DeleteModel{{ $inquirie->id }}" tabindex="-1"
                aria-labelledby="Model{{ $inquirie->id }}Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-danger" id="Model{{ $inquirie->id }}Label">Delete Inquirie
                                by
                                {{ $inquirie->name }}?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you shur to delete inquire by {{ $inquirie->name }} regurding to
                            {{ $inquirie->subject }}?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="{{ route('deleteInquirie', ['id' => $inquirie->id]) }}" type="button"
                                class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
</div>

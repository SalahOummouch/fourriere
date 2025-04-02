<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between border-bottom-0">
                        <div class="header-title">
                            <h4 class="card-title">Todo</h4>
                        </div>
                        <div class="header-action">
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-outline-primary active" data-toggle-extra="tab"
                                    data-target-extra="#board-content">Board</button>
                                <button type="button" class="btn btn-outline-primary" data-toggle-extra="tab"
                                    data-target-extra="#list-content">List</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div id="board-content" class="animate__animated animate__fadeIn active"
                    data-toggle-extra="tab-content">
                    <div class="board-content">
                        <div class="board-item">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="item-title">Todo</h5>
                                </div>
                            </div>
                            <div class="board-scrollbar board-scrollbar-0">
                                <x-todo-card id="1" class="border-color-left-blue" title='Launch SpaceX'>
                                </x-todo-card>
                                <x-todo-card id="2" class="border-color-left-red" title="New Updates">
                                </x-todo-card>
                                <x-todo-card id="3" class="border-color-left-yellow" title="Night mode">
                                </x-todo-card>
                                <x-todo-card id="4" class="border-color-left-green" title="Use-cases">
                                </x-todo-card>

                            </div>
                        </div>
                        <div class="board-item">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="item-title">In Progress</h5>
                                </div>
                            </div>
                            <div class="board-scrollbar board-scrollbar-1">
                                <x-todo-card id="7" class="" title='New Updates'>
                                </x-todo-card>
                                <x-todo-card id="6" class="border-color-left-yellow" title='Launch SpaceX'>
                                </x-todo-card>
                                <x-todo-card id="9" class="border-color-left-red" title='Use-cases'>
                                </x-todo-card>
                                <x-todo-card id="9" class="border-color-left-blue" title='Night mode'>
                                </x-todo-card>
                            </div>
                        </div>
                        <div class="board-item">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="item-title">Complete</h5>
                                </div>
                            </div>
                            <div class="board-scrollbar board-scrollbar-3">
                                <x-todo-card id="19" class="border-color-left-red" title='Use-cases'>
                                </x-todo-card>
                                <x-todo-card id="17" class="border-color-left-red" title='New Updates'>
                                </x-todo-card>
                                <x-todo-card id="18" class="" title='Night mode'>
                                </x-todo-card>
                                <x-todo-card id="16" class="" title='Launch SpaceX'>
                                </x-todo-card>
                            </div>
                        </div>
                        <div class="board-item">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="item-title">Review</h5>
                                </div>
                            </div>
                            <div class="board-scrollbar board-scrollbar-2">
                                <x-todo-card id="13" class="border-color-left-red" title='Night mode'>
                                </x-todo-card>
                                <x-todo-card id="11" class="border-color-left-blue" title='Launch SpaceX'>
                                </x-todo-card>
                                <x-todo-card id="14" class="border-color-left-green" title='Use-cases'>
                                </x-todo-card>
                                <x-todo-card id="12" class="" title='New Updates'>
                                </x-todo-card>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="list-content" class="animate__animated animate__fadeIn" data-toggle-extra="tab-content">
                    <div class="list-content">
                        <div class="list-item">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="item-title">Todo</h5>
                                </div>
                            </div>
                            <x-todo-list-card id="1" class="border-color-left-blue" title='Launch SpaceX'>
                            </x-todo-list-card>

                            <x-todo-list-card id="2" class="border-color-left-red" title='New Updates'>
                            </x-todo-list-card>

                            <x-todo-list-card id="3" class="border-color-left-yellow" title='Night mode'>
                            </x-todo-list-card>

                            <x-todo-list-card id="4" class="border-color-left-green" title='Use-cases'>
                            </x-todo-list-card>

                        </div>
                        <div class="list-item">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="item-title">In Progress</h5>
                                </div>
                            </div>
                            <x-todo-list-card id="6" class="border-color-left-blue" title='Launch SpaceX'>
                            </x-todo-list-card>

                            <x-todo-list-card id="7" class="border-color-left-red" title='New Updates'>
                            </x-todo-list-card>

                            <x-todo-list-card id="8" class="border-color-left-yellow" title='Night mode'>
                            </x-todo-list-card>

                            <x-todo-list-card id="9" class="border-color-left-green" title='Use-cases'>
                            </x-todo-list-card>

                        </div>
                        <div class="list-item">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="item-title">Review</h5>
                                </div>
                            </div>
                            <x-todo-list-card id="11" class="border-color-left-blue" title='Launch SpaceX'>
                            </x-todo-list-card>

                            <x-todo-list-card id="12" class="border-color-left-red" title='New Updates'>
                            </x-todo-list-card>

                            <x-todo-list-card id="13" class="border-color-left-yellow" title='Night mode'>
                            </x-todo-list-card>

                            <x-todo-list-card id="14" class="border-color-left-green" title='Use-cases'>
                            </x-todo-list-card>

                        </div>
                        <div class="list-item">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="item-title">Complete</h5>
                                </div>
                            </div>
                            <x-todo-list-card id="16" class="border-color-left-blue" title='Launch SpaceX'>
                            </x-todo-list-card>

                            <x-todo-list-card id="17" class="border-color-left-red" title='New Updates'>
                            </x-todo-list-card>

                            <x-todo-list-card id="18" class="border-color-left-yellow" title='Night mode'>
                            </x-todo-list-card>

                            <x-todo-list-card id="19" class="border-color-left-green" title='Use-cases'>
                            </x-todo-list-card>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

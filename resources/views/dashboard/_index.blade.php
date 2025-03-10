@extends('layouts.app')

@section('content')
<div class="card card-chat overflow-hidden">
    <div class="card-body d-flex p-0 h-100">
        <div class="chat-sidebar">
            <div class="contacts-list scrollbar-overlay os-host os-theme-dark os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="margin: 0px; width: 348px; height: 633px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible os-viewport-native-scrollbars-overlaid" style="overflow-y: scroll;">
                        <div class="os-content" style="padding: 0px; height: 100%; width: 100%;">
                            <div class="nav nav-tabs border-0 flex-column" role="tablist" aria-orientation="vertical">
                                <div class="hover-actions-trigger chat-contact nav-item active" role="tab" id="chat-link-0" data-bs-toggle="tab" data-bs-target="#chat-0" aria-controls="chat-0" aria-selected="true">
                                    <div class="d-md-none d-lg-block">
                                        <div class="dropdown dropdown-active-trigger dropdown-chat">
                                            <button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="svg-inline--fa fa-cog fa-w-16" data-fa-transform="shrink-3 down-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.75em;">
                                                    <g transform="translate(256 256)">
                                                        <g transform="translate(0, 128)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                                                            <path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z" transform="translate(-256 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <!-- <span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span> Font Awesome fontawesome.com -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2">
                                                <a class="dropdown-item" href="#!">Archive</a>
                                                <a class="dropdown-item text-danger" href="#!">Delete</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#!">Mark as Unread</a>
                                                <a class="dropdown-item" href="#!">Something's Wrong</a>
                                                <a class="dropdown-item" href="#!">Ignore Messsages</a>
                                                <a class="dropdown-item" href="#!">Block Messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3">
                                        <div class="avatar avatar-xl">
                                            <img class="rounded-circle" src="{{asset('images/group.png')}}" alt="">
                                        </div>
                                        <div class="flex-1 chat-contact-body ms-2 mt-2 d-md-none d-lg-block">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-0 chat-contact-title"><b>Antony Hopkins</b></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hover-actions-trigger chat-contact nav-item" role="tab" id="chat-link-1" data-bs-toggle="tab" data-bs-target="#chat-1" aria-controls="chat-1" aria-selected="false">
                                    <div class="d-md-none d-lg-block">
                                        <div class="dropdown dropdown-active-trigger dropdown-chat">
                                            <button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="svg-inline--fa fa-cog fa-w-16" data-fa-transform="shrink-3 down-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.75em;">
                                                    <g transform="translate(256 256)">
                                                        <g transform="translate(0, 128)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                                                            <path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z" transform="translate(-256 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <!-- <span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span> Font Awesome fontawesome.com -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2">
                                                <a class="dropdown-item" href="#!">Mute</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#!">Archive</a>
                                                <a class="dropdown-item text-danger" href="#!">Delete</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#!">Mark as Unread</a>
                                                <a class="dropdown-item" href="#!">Something's Wrong</a>
                                                <a class="dropdown-item" href="#!">Ignore Messsages</a>
                                                <a class="dropdown-item" href="#!">Block Messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3">
                                        <div class="avatar avatar-xl">
                                            <div class="rounded-circle overflow-hidden h-100 d-flex">
                                                  <img class="rounded-circle" src="{{asset('images/group.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="flex-1 chat-contact-body ms-2 mt-2 d-md-none d-lg-block">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-0 chat-contact-title"><b>Avengers</b></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track os-scrollbar-track-off">
                        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track os-scrollbar-track-off">
                        <div class="os-scrollbar-handle" style="height: 85.7916%; transform: translate(0px, 0px);">
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
            <form class="contacts-search-wrapper">
                <div class="form-group mb-0 position-relative d-md-none d-lg-block w-100 h-100">
                    <input class="form-control form-control-sm chat-contacts-search border-0 h-100" type="text"
                        placeholder="Search contacts ..."><svg
                        class="svg-inline--fa fa-search fa-w-16 contacts-search-icon" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="search" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                        </path>
                    </svg><!-- <span class="fas fa-search contacts-search-icon"></span> Font Awesome fontawesome.com -->
                </div>
                <button class="btn btn-sm btn-transparent d-none d-md-inline-block d-lg-none"><svg
                        class="svg-inline--fa fa-search fa-w-16 fs--1" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                        </path>
                    </svg><!-- <span class="fas fa-search fs--1"></span> Font Awesome fontawesome.com --></button>
            </form>
        </div>
        <div class="tab-content card-chat-content">
            <div class="tab-pane card-chat-pane active" id="chat-0" role="tabpanel" aria-labelledby="chat-link-0">
                <div class="chat-content-header">
                    <div class="row flex-between-center">
                        <div class="col-6 col-sm-8 d-flex align-items-center"><a
                                class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                                <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chevron-left" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                    </path>
                                </svg><!-- <div class="fas fa-chevron-left"></div> Font Awesome fontawesome.com -->
                            </a>
                            <div class="min-w-0">
                                <h5 class="mb-0 text-truncate fs-0">Antony Hopkins</h5>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="0"
                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                data-bs-original-title="Conversation Information"
                                aria-label="Conversation Information"><svg class="svg-inline--fa fa-info fa-w-6"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z">
                                    </path>
                                </svg><!-- <span class="fas fa-info"></span> Font Awesome fontawesome.com --></button>
                        </div>
                    </div>
                </div>
                <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="0">
                        <div class="h-100 overflow-auto scrollbar">
                            <div class="d-flex position-relative align-items-center p-3 border-bottom">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">
                                </div>
                                <div class="flex-1 ms-2 d-flex flex-between-center">
                                    <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Antony Hopkins</a></h6>
                                    <div class="dropdown z-index-1">
                                        <button
                                            class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3"
                                            type="button" id="profile-dropdown-0" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><svg
                                                class="svg-inline--fa fa-cog fa-w-16" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="cog" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z">
                                                </path>
                                            </svg>
                                            <!-- <span class="fas fa-cog"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-0">
                                            <a class="dropdown-item" href="#!">Mute</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#!">Archive</a>
                                            <a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-3" id="others-info-1">
                              <div class="title" id="member-title-1">
                                <h6 class="btn btn-link btn-accordion hover-text-decoration-none" href="#members-1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="members-1">Members</h6>
                              </div>
                                  <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                      <div class="avatar avatar-xl status-online">
                                          <img class="rounded-circle" src="../assets/img/team/2.jpg" alt=""> 
                                      </div>
                                      <div class="flex-1 ms-2 d-flex justify-content-between">
                                          <div>
                                              <h6 class="mb-0"><a class="text-700" href="../pages/user/profile.html">Antony Hopkins</a></h6>
                                              <div class="fs--2 text-400">Admin</div>
                                          </div>
                                          <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                                              <button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="svg-inline--fa fa-ellipsis-h fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                      <path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"> </path>
                                                  </svg>
                                                  <!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com -->
                                                </button>
                                              <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-0">
                                                <a class="dropdown-item" href="#!">Message</a>
                                                <a class="dropdown-item" href="#!">View Profile</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                      <div class="avatar avatar-xl">
                                          <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="">

                                      </div>
                                      <div class="flex-1 ms-2 d-flex justify-content-between">
                                          <div>
                                              <h6 class="mb-0"><a class="text-700"
                                                      href="../pages/user/profile.html">Emma Watson</a></h6>
                                              <div class="fs--2 text-400">Member</div>
                                          </div>
                                          <div
                                              class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                                              <button
                                                  class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none"
                                                  type="button" id="user-settings-dropdown-1"
                                                  data-bs-toggle="dropdown" aria-haspopup="true"
                                                  aria-expanded="false"><svg
                                                      class="svg-inline--fa fa-ellipsis-h fa-w-16" aria-hidden="true"
                                                      focusable="false" data-prefix="fas" data-icon="ellipsis-h"
                                                      role="img" xmlns="http://www.w3.org/2000/svg"
                                                      viewBox="0 0 512 512" data-fa-i2svg="">
                                                      <path fill="currentColor"
                                                          d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                      </path>
                                                  </svg>
                                                  <!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                              <div class="dropdown-menu dropdown-menu-end py-2 border"
                                                  aria-labelledby="user-settings-dropdown-1"><a class="dropdown-item"
                                                      href="#!">Message</a><a class="dropdown-item" href="#!">View
                                                      Profile</a></div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                      <div class="avatar avatar-xl status-online">
                                          <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="">

                                      </div>
                                      <div class="flex-1 ms-2 d-flex justify-content-between">
                                          <div>
                                              <h6 class="mb-0"><a class="text-700"
                                                      href="../pages/user/profile.html">Anna Karinina</a></h6>
                                              <div class="fs--2 text-400">Member</div>
                                          </div>
                                          <div
                                              class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                                              <button
                                                  class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none"
                                                  type="button" id="user-settings-dropdown-2"
                                                  data-bs-toggle="dropdown" aria-haspopup="true"
                                                  aria-expanded="false"><svg
                                                      class="svg-inline--fa fa-ellipsis-h fa-w-16" aria-hidden="true"
                                                      focusable="false" data-prefix="fas" data-icon="ellipsis-h"
                                                      role="img" xmlns="http://www.w3.org/2000/svg"
                                                      viewBox="0 0 512 512" data-fa-i2svg="">
                                                      <path fill="currentColor"
                                                          d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                      </path>
                                                  </svg>
                                                  <!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com -->
                                                </button>
                                              <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-2">
                                                <a class="dropdown-item" href="#!">Message</a>
                                                <a class="dropdown-item" href="#!">View Profile</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                      <div class="avatar avatar-xl status-online">
                                          <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="">
                                      </div>
                                      <div class="flex-1 ms-2 d-flex justify-content-between">
                                          <div>
                                              <h6 class="mb-0"><a class="text-700" href="../pages/user/profile.html">John Lee</a></h6>
                                              <div class="fs--2 text-400">Member</div>
                                          </div>
                                          <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                                              <button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="svg-inline--fa fa-ellipsis-h fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                      <path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"> </path>
                                                  </svg>
                                                  <!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com -->
                                                </button>
                                              <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-3">
                                                <a class="dropdown-item" href="#!">Message</a>
                                                <a class="dropdown-item" href="#!">View Profile</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                      <div class="avatar avatar-xl">
                                          <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="">

                                      </div>
                                      <div class="flex-1 ms-2 d-flex justify-content-between">
                                          <div>
                                              <h6 class="mb-0"><a class="text-700"
                                                      href="../pages/user/profile.html">Bucky Robert</a></h6>
                                              <div class="fs--2 text-400">Member</div>
                                          </div>
                                          <div
                                              class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                                              <button
                                                  class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none"
                                                  type="button" id="user-settings-dropdown-4"
                                                  data-bs-toggle="dropdown" aria-haspopup="true"
                                                  aria-expanded="false"><svg
                                                      class="svg-inline--fa fa-ellipsis-h fa-w-16" aria-hidden="true"
                                                      focusable="false" data-prefix="fas" data-icon="ellipsis-h"
                                                      role="img" xmlns="http://www.w3.org/2000/svg"
                                                      viewBox="0 0 512 512" data-fa-i2svg="">
                                                      <path fill="currentColor"
                                                          d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                      </path>
                                                  </svg>
                                                  <!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                              <div class="dropdown-menu dropdown-menu-end py-2 border"
                                                  aria-labelledby="user-settings-dropdown-4"><a class="dropdown-item"
                                                      href="#!">Message</a><a class="dropdown-item" href="#!">View
                                                      Profile</a></div>
                                          </div>
                                      </div>
                                  </div>
                          </div>

                        </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                        <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                            <div class="avatar avatar-2xl status-online me-3">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt=""> 
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0">
                                  <a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Antony Hopkins</a>
                                </h6>
                                <p class="mb-0">You friends with Antony Hopkins. Say hi to start the conversation</p>
                            </div>
                        </div>
                        <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">Yes, in an organization stature,
                                            this is a must. Besides, we need to quickly establish all other professional
                                            appearances, e.g., having a website where members’ profile will be displayed
                                            along with additional organizational information. Providing services to
                                            existing members is more important than attracting new members at this
                                            moment, in my opinion..</div>
                                    </div>
                                    <div class="text-400 fs--2"><span>11:54 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">
                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">What are you doing?</div>
                                    </div>
                                    <div class="text-400 fs--2"><span>11:54 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <div class="bg-primary text-white p-2 rounded-2 chat-message light">
                                            <p class="mb-0">I took this pic </p>
                                            <a href="../assets/img/chat/1.jpg" data-gallery="gallery-3">
                                                <img class="rounded" src="../assets/img/chat/1.jpg" alt="" width="150">
                                            </a>

                                        </div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">11:54 am<svg
                                            class="svg-inline--fa fa-check fa-w-16 ms-2 text-success" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="check" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg>
                                        <!-- <span class="fas fa-check ms-2 text-success"></span> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <div class="bg-primary text-white p-2 rounded-2 chat-message light">Nothing!
                                        </div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">11:54 am<svg
                                            class="svg-inline--fa fa-check fa-w-16 ms-2 text-success" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="check" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg>
                                        <!-- <span class="fas fa-check ms-2 text-success"></span> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center fs--2 text-500"><span>May 6, 2019, 11:54 am</span></div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">How are you?</div>
        
                                    </div>
                                    <div class="text-400 fs--2"><span>11:54 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <div class="bg-primary text-white p-2 rounded-2 chat-message light">Fine
                                        </div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">11:54 am<svg
                                            class="svg-inline--fa fa-check-double fa-w-16 ms-2" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="check-double" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M505 174.8l-39.6-39.6c-9.4-9.4-24.6-9.4-33.9 0L192 374.7 80.6 263.2c-9.4-9.4-24.6-9.4-33.9 0L7 302.9c-9.4 9.4-9.4 24.6 0 34L175 505c9.4 9.4 24.6 9.4 33.9 0l296-296.2c9.4-9.5 9.4-24.7.1-34zm-324.3 106c6.2 6.3 16.4 6.3 22.6 0l208-208.2c6.2-6.3 6.2-16.4 0-22.6L366.1 4.7c-6.2-6.3-16.4-6.3-22.6 0L192 156.2l-55.4-55.5c-6.2-6.3-16.4-6.3-22.6 0L68.7 146c-6.2 6.3-6.2 16.4 0 22.6l112 112.2z">
                                            </path>
                                        </svg>
                                        <!-- <span class="fas fa-check-double ms-2"></span> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center fs--2 text-500"><span>May 7, 2019, 11:54 am</span></div>
                        <div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <div class="chat-message chat-gallery">
                                            <div class="row mx-n1">
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/7.jpg" data-gallery="gallery-1"><img
                                                            src="../assets/img/chat/7.jpg" alt=""
                                                            class="img-fluid rounded mb-2"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/8.jpg" data-gallery="gallery-1"><img
                                                            src="../assets/img/chat/8.jpg" alt=""
                                                            class="img-fluid rounded mb-2"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/9.jpg" data-gallery="gallery-1"><img
                                                            src="../assets/img/chat/9.jpg" alt=""
                                                            class="img-fluid rounded mb-2"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/10.jpg" data-gallery="gallery-1"><img
                                                            src="../assets/img/chat/10.jpg" alt=""
                                                            class="img-fluid rounded mb-2 mb-lg-0"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/11.jpg" data-gallery="gallery-1"><img
                                                            src="../assets/img/chat/11.jpg" alt=""
                                                            class="img-fluid rounded mb-2 mb-lg-0"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/12.jpg" data-gallery="gallery-1"><img
                                                            src="../assets/img/chat/12.jpg" alt=""
                                                            class="img-fluid rounded"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">11:54 am<svg
                                            class="svg-inline--fa fa-check fa-w-16 ms-2" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="check" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg>
                                        <!-- <span class="fas fa-check ms-2"></span> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">I took some excellent images yesterday.</div>
                                    </div>
                                    <div class="text-400 fs--2">
                                      <span>11:54 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center fs--2 text-500"><span>May 8, 2019, 11:54 am</span></div>
                        <div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <div class="bg-primary text-white p-2 rounded-2 chat-message light">Give me the images.</div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">11:54 am</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">
                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message chat-gallery">
                                            <div class="row mx-n1">
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/1.jpg" data-gallery="gallery-2"><img
                                                            src="../assets/img/chat/1.jpg" alt=""
                                                            class="img-fluid rounded mb-2"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/2.jpg" data-gallery="gallery-2"><img
                                                            src="../assets/img/chat/2.jpg" alt=""
                                                            class="img-fluid rounded mb-2"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/3.jpg" data-gallery="gallery-2"><img
                                                            src="../assets/img/chat/3.jpg" alt=""
                                                            class="img-fluid rounded mb-2"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/4.jpg" data-gallery="gallery-2"><img
                                                            src="../assets/img/chat/4.jpg" alt=""
                                                            class="img-fluid rounded mb-2 mb-lg-0"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/5.jpg" data-gallery="gallery-2"><img
                                                            src="../assets/img/chat/5.jpg" alt=""
                                                            class="img-fluid rounded mb-2 mb-lg-0"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/6.jpg" data-gallery="gallery-2"><img
                                                            src="../assets/img/chat/6.jpg" alt=""
                                                            class="img-fluid rounded"></a>
                                                </div>
                                            </div>
                                        </div>
        
                                    </div>
                                    <div class="text-400 fs--2"><span>11:54 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane card-chat-pane" id="chat-1" role="tabpanel" aria-labelledby="chat-link-1">
                <div class="chat-content-header">
                    <div class="row flex-between-center">
                        <div class="col-6 col-sm-8 d-flex align-items-center"><a
                                class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                                <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chevron-left" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                    </path>
                                </svg><!-- <div class="fas fa-chevron-left"></div> Font Awesome fontawesome.com -->
                            </a>
                            <div class="min-w-0">
                                <h5 class="mb-0 text-truncate fs-0">Avengers</h5>
                                <div class="fs--2 text-400">Active 7h ago
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="1"
                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                data-bs-original-title="Start a Call" aria-label="Start a Call"><svg
                                    class="svg-inline--fa fa-phone fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                    </path>
                                </svg><!-- <span class="fas fa-phone"></span> Font Awesome fontawesome.com --></button>
                            <button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="1"
                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                data-bs-original-title="Start a Video Call" aria-label="Start a Video Call"><svg
                                    class="svg-inline--fa fa-video fa-w-18" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z">
                                    </path>
                                </svg><!-- <span class="fas fa-video"></span> Font Awesome fontawesome.com --></button>
                            <button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="1"
                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                data-bs-original-title="Conversation Information"
                                aria-label="Conversation Information"><svg class="svg-inline--fa fa-info fa-w-6"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z">
                                    </path>
                                </svg><!-- <span class="fas fa-info"></span> Font Awesome fontawesome.com --></button>
                        </div>
                    </div>
                </div>
                <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="1">
                        <div class="h-100 overflow-auto scrollbar">
                            <div class="d-flex position-relative align-items-center p-3 border-bottom">
                                <div class="avatar avatar-xl">
                                    <div class="rounded-circle overflow-hidden h-100 d-flex">
                                        <div class="w-50 border-end"><img src="../assets/img/team/1.jpg" alt=""></div>
                                        <div class="w-50 d-flex flex-column"><img class="h-50 border-bottom"
                                                src="../assets/img/team/2.jpg" alt=""><img class="h-50"
                                                src="../assets/img/team/3.jpg" alt=""></div>
                                    </div>
                                </div>
                                <div class="flex-1 ms-2 d-flex flex-between-center">
                                    <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700"
                                            href="../pages/user/profile.html">Avengers</a></h6>
                                    <div class="dropdown z-index-1">
                                        <button
                                            class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3"
                                            type="button" id="profile-dropdown-1" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><svg
                                                class="svg-inline--fa fa-cog fa-w-16" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="cog" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z">
                                                </path>
                                            </svg>
                                            <!-- <span class="fas fa-cog"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2"
                                            aria-labelledby="profile-dropdown-1"><a class="dropdown-item"
                                                href="#!">Mute</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                                href="#!">Archive</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3" id="others-info-1">
                                <div class="title" id="member-title-1">
                                  <h6 class="btn btn-link btn-accordion hover-text-decoration-none" href="#members-1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="members-1">Members</h6>
                                </div>
                                    <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                        <div class="avatar avatar-xl status-online">
                                            <img class="rounded-circle" src="../assets/img/team/2.jpg" alt=""> 
                                        </div>
                                        <div class="flex-1 ms-2 d-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-0"><a class="text-700" href="../pages/user/profile.html">Antony Hopkins</a></h6>
                                                <div class="fs--2 text-400">Admin</div>
                                            </div>
                                            <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                                                <button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-0" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><svg
                                                        class="svg-inline--fa fa-ellipsis-h fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="ellipsis-h"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2 border"
                                                    aria-labelledby="user-settings-dropdown-0"><a class="dropdown-item"
                                                        href="#!">Message</a><a class="dropdown-item" href="#!">View
                                                        Profile</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                        <div class="avatar avatar-xl">
                                            <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="">

                                        </div>
                                        <div class="flex-1 ms-2 d-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-0"><a class="text-700"
                                                        href="../pages/user/profile.html">Emma Watson</a></h6>
                                                <div class="fs--2 text-400">Member</div>
                                            </div>
                                            <div
                                                class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                                                <button
                                                    class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none"
                                                    type="button" id="user-settings-dropdown-1"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><svg
                                                        class="svg-inline--fa fa-ellipsis-h fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="ellipsis-h"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2 border"
                                                    aria-labelledby="user-settings-dropdown-1"><a class="dropdown-item"
                                                        href="#!">Message</a><a class="dropdown-item" href="#!">View
                                                        Profile</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                        <div class="avatar avatar-xl status-online">
                                            <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="">

                                        </div>
                                        <div class="flex-1 ms-2 d-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-0"><a class="text-700"
                                                        href="../pages/user/profile.html">Anna Karinina</a></h6>
                                                <div class="fs--2 text-400">Member</div>
                                            </div>
                                            <div
                                                class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                                                <button
                                                    class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none"
                                                    type="button" id="user-settings-dropdown-2"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><svg
                                                        class="svg-inline--fa fa-ellipsis-h fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="ellipsis-h"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2 border"
                                                    aria-labelledby="user-settings-dropdown-2"><a class="dropdown-item"
                                                        href="#!">Message</a><a class="dropdown-item" href="#!">View
                                                        Profile</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                        <div class="avatar avatar-xl status-online">
                                            <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="">

                                        </div>
                                        <div class="flex-1 ms-2 d-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-0"><a class="text-700"
                                                        href="../pages/user/profile.html">John Lee</a></h6>
                                                <div class="fs--2 text-400">Member</div>
                                            </div>
                                            <div
                                                class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                                                <button
                                                    class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none"
                                                    type="button" id="user-settings-dropdown-3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><svg
                                                        class="svg-inline--fa fa-ellipsis-h fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="ellipsis-h"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2 border"
                                                    aria-labelledby="user-settings-dropdown-3"><a class="dropdown-item"
                                                        href="#!">Message</a><a class="dropdown-item" href="#!">View
                                                        Profile</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                        <div class="avatar avatar-xl">
                                            <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="">

                                        </div>
                                        <div class="flex-1 ms-2 d-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-0"><a class="text-700"
                                                        href="../pages/user/profile.html">Bucky Robert</a></h6>
                                                <div class="fs--2 text-400">Member</div>
                                            </div>
                                            <div
                                                class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                                                <button
                                                    class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none"
                                                    type="button" id="user-settings-dropdown-4"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><svg
                                                        class="svg-inline--fa fa-ellipsis-h fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="ellipsis-h"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2 border"
                                                    aria-labelledby="user-settings-dropdown-4"><a class="dropdown-item"
                                                        href="#!">Message</a><a class="dropdown-item" href="#!">View
                                                        Profile</a></div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                        <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                            <div class="avatar avatar-2xl me-3">
                                <div class="rounded-circle overflow-hidden h-100 d-flex">
                                    <div class="w-50 border-end"><img src="../assets/img/team/1.jpg" alt=""></div>
                                    <div class="w-50 d-flex flex-column"><img class="h-50 border-bottom"
                                            src="../assets/img/team/2.jpg" alt=""><img class="h-50"
                                            src="../assets/img/team/3.jpg" alt=""></div>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700"
                                        href="../pages/user/profile.html">Avengers</a></h6>
                                <p class="mb-0">You are a member of Avengers. Say hi to start conversation to the group.
                                </p>
                            </div>
                        </div>
                        <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/13.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">In an organisation stature, this
                                            is a must. Besides, we need to quickly establish all other professional
                                            appearances, e.g. having a website where members’ profile will be displayed
                                            along with other organisational information. Providing services to existing
                                            members is more important than attracting new members at this moment, in my
                                            opinion.</div>
        
                                    </div>
                                    <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Anna</span><span>11:54
                                            am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <div class="bg-primary text-white p-2 rounded-2 chat-message light">Your are
                                            right 👍
                                        </div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">11:54 am<svg
                                            class="svg-inline--fa fa-check fa-w-16 ms-2 text-success" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="check" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg>
                                        <!-- <span class="fas fa-check ms-2 text-success"></span> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">We should divide the tasks among
                                            all other members.</div>
        
                                    </div>
                                    <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Antony</span><span>11:54
                                            am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">I will make a list of all the
                                            tasks.</div>
        
                                    </div>
                                    <div class="text-400 fs--2"><span class="fw-semi-bold me-2">John</span><span>11:54
                                            am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center fs--2 text-500"><span>May 7, 2019, 11:54 am</span></div>
                        <div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <div class="bg-primary text-white p-2 rounded-2 chat-message light">I can help
                                            you to do this.
                                        </div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">11:54 am<svg
                                            class="svg-inline--fa fa-check fa-w-16 ms-2 text-success" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="check" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg>
                                        <!-- <span class="fas fa-check ms-2 text-success"></span> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">It will be a great opportunity if
                                            I can contribute to this task 😊</div>
        
                                    </div>
                                    <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Emma</span><span>11:54
                                            am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">Wow, it will be great!</div>
        
                                    </div>
                                    <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Bucky</span><span>11:54
                                            am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2"><a href="#!"
                                                class="text-primary">@Emma</a> What do you think about the plan?</div>
        
                                    </div>
                                    <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Bucky</span><span>11:54
                                            am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="chat-editor-area">
                <div class="emojiarea-editor outline-none scrollbar" contenteditable="true"
                    placeholder="Type your message"></div>
                <input class="d-none" type="file" id="chat-file-upload">
                <label class="chat-file-upload cursor-pointer" for="chat-file-upload"><svg
                        class="svg-inline--fa fa-paperclip fa-w-14" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="paperclip" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M43.246 466.142c-58.43-60.289-57.341-157.511 1.386-217.581L254.392 34c44.316-45.332 116.351-45.336 160.671 0 43.89 44.894 43.943 117.329 0 162.276L232.214 383.128c-29.855 30.537-78.633 30.111-107.982-.998-28.275-29.97-27.368-77.473 1.452-106.953l143.743-146.835c6.182-6.314 16.312-6.422 22.626-.241l22.861 22.379c6.315 6.182 6.422 16.312.241 22.626L171.427 319.927c-4.932 5.045-5.236 13.428-.648 18.292 4.372 4.634 11.245 4.711 15.688.165l182.849-186.851c19.613-20.062 19.613-52.725-.011-72.798-19.189-19.627-49.957-19.637-69.154 0L90.39 293.295c-34.763 35.56-35.299 93.12-1.191 128.313 34.01 35.093 88.985 35.137 123.058.286l172.06-175.999c6.177-6.319 16.307-6.433 22.626-.256l22.877 22.364c6.319 6.177 6.434 16.307.256 22.626l-172.06 175.998c-59.576 60.938-155.943 60.216-214.77-.485z">
                        </path>
                    </svg><!-- <span class="fas fa-paperclip"></span> Font Awesome fontawesome.com --></label>
                <div class="btn btn-link emoji-icon" data-emoji-button="data-emoji-button"><svg
                        class="svg-inline--fa fa-laugh-beam fa-w-16" aria-hidden="true" focusable="false"
                        data-prefix="far" data-icon="laugh-beam" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 496 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm141.4 389.4c-37.8 37.8-88 58.6-141.4 58.6s-103.6-20.8-141.4-58.6S48 309.4 48 256s20.8-103.6 58.6-141.4S194.6 56 248 56s103.6 20.8 141.4 58.6S448 202.6 448 256s-20.8 103.6-58.6 141.4zM328 152c-23.8 0-52.7 29.3-56 71.4-.7 8.6 10.8 11.9 14.9 4.5l9.5-17c7.7-13.7 19.2-21.6 31.5-21.6s23.8 7.9 31.5 21.6l9.5 17c4.1 7.4 15.6 4 14.9-4.5-3.1-42.1-32-71.4-55.8-71.4zm-201 75.9l9.5-17c7.7-13.7 19.2-21.6 31.5-21.6s23.8 7.9 31.5 21.6l9.5 17c4.1 7.4 15.6 4 14.9-4.5-3.3-42.1-32.2-71.4-56-71.4s-52.7 29.3-56 71.4c-.6 8.5 10.9 11.9 15.1 4.5zM362.4 288H133.6c-8.2 0-14.5 7-13.5 15 7.5 59.2 58.9 105 121.1 105h13.6c62.2 0 113.6-45.8 121.1-105 1-8-5.3-15-13.5-15z">
                        </path>
                    </svg><!-- <span class="far fa-laugh-beam"></span> Font Awesome fontawesome.com -->
                </div>
                <button class="btn btn-sm btn-send" type="submit">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection


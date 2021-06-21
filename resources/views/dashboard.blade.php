@extends('templates.navbar')

@section('title')
    NoteNuts
@endsection

@section('content')
@dump(get_defined_vars())
    <div class="container mt-3">
        <h2>{{$user->name}}'s' Latest Notes</h2>
        <div class="d-flex justify-content-center mt-3">
            @forelse ($data as $note)
                <div class="card border-success m-2" style="width: 25rem !important; max-width: 25rem; height: 15rem; max-height: 15rem;">
                    <div class="card-header">
                        <h4 class="card-title m-0">{{$note['title']}}</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p class="card-text text-truncate">{{$note['note']}}</p>
                        <div class="d-flex">
                            @forelse ($note['tags'] as $tag)
                            <div class="badge rounded-pill bg-success mx-1">
                                {{$tag}}
                            </div>
                            @empty
                                <p>No tags</p>
                            @endforelse
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        {{$note['updated_at']}}
                    </div>
                </div>
            @empty
                <div class="d-flex justify-content-start flex-column align-items-center my-4 h-100 p-5">
                    <h2 class="text-muted mb-3">You Don't Have Any Notes Yet</h2>
                    <a href="{{ url('/create-note') }}" class="btn btn-outline-success">Create Note</a>
                </div>
            @endforelse
            
        </div>
        <div class="d-flex justify-content-center mt-2 mb-5">
            <a href="{{url('/notes')}}" class="btn btn-lg btn-success">See More</a>
        </div>
        <div class="bg-white shadow px-3 py-5 rounded mb-3">
            <h1 class="text-center mb-5"><strong>Benefits Of Taking <span class="text-success">Notes</span></strong></h1>
            <div class="row bg-white mb-5">
                <div class="col d-flex justify-content-center">
                    <svg width="250" viewBox="0 0 427 658" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="new-normal 1" clip-path="url(#clip0)">
                        <path id="Vector" opacity="0.2" d="M424.405 252.235L417.934 252.213L393.117 252.138L387.605 252.127L370.888 252.084L366.757 252.062H364.924L278.716 251.825L277.346 251.814H276.041L270.8 251.793L256.002 251.76L248.862 251.739L234.043 251.696V37.066L416.855 20.921L423.327 20.349L424.405 252.235Z" fill="black"/>
                        <g id="wash-male-head">
                        <path id="Vector_2" d="M172.579 149.85C187.144 149.85 198.951 138.043 198.951 123.477C198.951 108.912 187.144 97.1047 172.579 97.1047C158.014 97.1047 146.206 108.912 146.206 123.477C146.206 138.043 158.014 149.85 172.579 149.85Z" fill="#FFB8B8"/>
                        <path id="Vector_3" d="M152.14 130.73L149.503 168.97L182.469 172.926C182.469 172.926 182.469 141.279 185.106 137.323C187.743 133.367 152.14 130.73 152.14 130.73Z" fill="#FFB8B8"/>
                        <path id="Vector_4" d="M152.14 146.553C152.14 146.553 124.449 126.774 138.954 103.039C149.016 86.5723 169.868 87.8757 181.696 90.2185C184.882 90.8066 187.878 92.1609 190.425 94.1646C192.971 96.1683 194.993 98.7612 196.314 101.72C198.292 106.335 198.292 110.95 190.38 110.95C174.557 110.95 182.468 122.818 182.468 122.818C182.468 122.818 171.919 125.455 174.557 134.686C177.194 143.916 152.14 146.553 152.14 146.553Z" fill="#2F2E41"/>
                        </g>
                        <path id="Vector_5" d="M417.934 252.213V252.235L399.815 252.181L393.117 252.159L387.605 252.149L379.689 252.127L376.529 252.116L370.899 252.106L367.976 252.095H366.757L364.956 252.084H364.924L351.323 252.052L348.864 252.041L313.995 251.944L307.729 251.922L282.157 251.847L278.716 251.836H277.336C277.342 251.83 277.346 251.823 277.346 251.814H276.041L270.8 251.793L256.002 251.76V251.771L248.862 251.75L243.955 251.739H242.855L227.572 251.696V37.0664L416.855 20.349V20.9206L417.934 252.213Z" fill="#E6E6E6"/>
                        <path id="Vector_6" opacity="0.2" d="M322.483 16.5746C326.653 16.5746 330.033 13.1945 330.033 9.02484C330.033 4.85521 326.653 1.47507 322.483 1.47507C318.314 1.47507 314.933 4.85521 314.933 9.02484C314.933 13.1945 318.314 16.5746 322.483 16.5746Z" fill="black"/>
                        <path id="Vector_7" d="M318.169 16.5746C322.339 16.5746 325.719 13.1945 325.719 9.02484C325.719 4.85521 322.339 1.47507 318.169 1.47507C313.999 1.47507 310.619 4.85521 310.619 9.02484C310.619 13.1945 313.999 16.5746 318.169 16.5746Z" fill="#3F3D56"/>
                        <path id="Vector_8" opacity="0.2" d="M381.271 -6.12193e-06L263.008 9.44879L263.696 18.0497L381.958 8.6009L381.271 -6.12193e-06Z" fill="black"/>
                        <path id="Vector_9" d="M376.957 -6.12193e-06L258.694 9.44879L259.381 18.0497L377.644 8.6009L376.957 -6.12193e-06Z" fill="#E6E6E6"/>
                        <path id="Vector_10" opacity="0.56" d="M388.071 204.34C381.729 180.31 378.353 178.455 378.353 178.455L342.589 160.454L342.352 160.368L322.248 175.198L313.587 161.867L313.156 161.49C313.156 161.49 312.972 161.565 312.616 161.705C309.51 162.956 293.515 169.568 281.641 177.43L281.274 177.377L267.264 184.344L264.751 193.63L261.849 204.34L251.862 250.739V250.75L259.002 250.771V250.76L273.8 250.793L276.129 239.36L279.041 250.814H280.346C280.346 250.823 280.342 250.83 280.336 250.836H281.716L285.157 250.847L310.729 250.922L316.995 250.944L351.864 251.041L354.323 251.052L367.924 251.084H367.956L369.757 251.095V251.062L370.685 240.956L371.246 238.131L373.888 251.084L373.899 251.105L379.529 251.116L382.689 251.127L390.605 251.149L396.117 251.159V251.138C394.596 240.859 390.401 213.184 388.071 204.34Z" fill="#3459E6"/>
                        <g id="wash-male-head-shadow">
                        <path id="Vector_11" opacity="0.56" d="M357.029 133.109L357.043 133.158C357.026 133.161 357.022 133.144 357.029 133.109C356.886 132.617 355.08 126.802 349.909 129.794C344.513 132.917 338.064 113.31 338.064 113.31C338.064 113.31 321.82 117.781 311.904 117.096C311.231 117.048 310.571 116.889 309.95 116.626C307.68 121.327 306.919 126.615 307.772 131.766C308.625 136.916 311.05 141.677 314.715 145.395L312.965 161L321.965 175L341.965 160C341.965 160 342.218 163.818 343.037 150.742C346.912 149.011 350.289 146.335 352.86 142.959C355.43 139.583 357.111 135.615 357.748 131.42C357.343 132.343 357.06 132.942 357.029 133.109Z" fill="#FFB8B8"/>
                        <path id="Vector_12" opacity="0.56" d="M357.748 132.42C359.958 127.394 365.88 112.6 355.48 103.686C346.877 96.3112 316.527 89.7294 306.828 109.309C306.459 110.056 306.248 110.87 306.207 111.702C306.166 112.533 306.296 113.364 306.588 114.144C306.881 114.923 307.33 115.634 307.908 116.233C308.486 116.832 309.181 117.306 309.95 117.626C310.09 117.337 310.249 117.058 310.399 116.775C310.885 116.946 311.391 117.054 311.904 117.096C321.82 117.781 338.064 113.31 338.064 113.31C338.064 113.31 344.513 132.917 349.909 129.794C355.08 126.802 356.886 132.617 357.029 133.109C357.06 132.942 357.343 132.343 357.748 131.42C357.912 130.302 358.001 129.173 358.014 128.043C358.019 128.242 358.03 128.439 358.03 128.639C358.03 129.905 357.936 131.169 357.748 132.42V132.42Z" fill="#2F2E41"/>
                        </g>
                        <path id="Vector_13" d="M166.095 657.227C257.827 657.227 332.19 645.638 332.19 631.342C332.19 617.046 257.827 605.457 166.095 605.457C74.3633 605.457 0 617.046 0 631.342C0 645.638 74.3633 657.227 166.095 657.227Z" fill="#E6E6E6"/>
                        <path id="Vector_14" d="M422.248 579.033L386.117 620.859L385.448 621.635L173.645 589.279V347.686H421.709L422.248 579.033Z" fill="#3F3D56"/>
                        <path id="Vector_15" d="M194.757 438.826L194.596 440.977L237.737 444.212L237.899 442.061L194.757 438.826Z" fill="#E6E6E6"/>
                        <path id="Vector_16" d="M300.45 448.533L300.296 450.684L345.595 453.919L345.749 451.768L300.45 448.533Z" fill="#E6E6E6"/>
                        <path id="Vector_17" d="M385.643 415.097L173.171 402.154L173.04 404.307L270.178 410.224L271.83 604.452L273.987 604.433L272.337 410.356L385.512 417.25L385.643 415.097Z" fill="#E6E6E6"/>
                        <path id="Vector_18" opacity="0.2" d="M422.248 579.033L386.117 620.859V347.686H421.709L422.248 579.033Z" fill="black"/>
                        <path id="Vector_19" d="M188.205 352.54H168.791V339.597L220.561 329.89L223.797 323.419L426.562 328.812V347.147L386.117 361.911L359.693 361.168C359.693 361.168 319.787 394.603 272.331 391.367C224.875 388.131 188.205 352.54 188.205 352.54Z" fill="#E6E6E6"/>
                        <path id="Vector_20" d="M364.546 340.136L353.222 348.225L321.502 347.46C321.502 347.47 321.491 347.46 321.491 347.46H321.437L319.021 347.406H319.01L317.004 347.352L310.673 347.201L310.145 347.19L304.547 347.061L304.342 347.05L297.386 346.888L296.933 346.877L291.788 346.748L290.958 346.737L284.918 346.586L282.976 346.543L272.115 346.284L269.376 346.219L240.514 345.529C240.514 345.529 219.946 346.554 218.976 340.579C218.954 340.432 218.943 340.284 218.943 340.136C218.943 336.739 222.524 336.016 225.911 336.103C227.923 336.177 229.924 336.444 231.886 336.901L240.169 337.106L245.335 337.224L261.546 337.623L275.405 337.958L280.312 338.087L287.334 338.26L290.116 338.324L300.449 338.572L305.28 338.691L315.483 338.939L364.546 340.136Z" fill="#CCCCCC"/>
                        <path id="Vector_21" d="M304.148 345.529C305.339 345.529 306.305 344.563 306.305 343.372C306.305 342.181 305.339 341.215 304.148 341.215C302.957 341.215 301.991 342.181 301.991 343.372C301.991 344.563 302.957 345.529 304.148 345.529Z" fill="#3F3D56"/>
                        <path id="Vector_22" d="M305.227 337.979C316.544 337.979 325.719 337.014 325.719 335.822C325.719 334.631 316.544 333.665 305.227 333.665C293.909 333.665 284.734 334.631 284.734 335.822C284.734 337.014 293.909 337.979 305.227 337.979Z" fill="#CCCCCC"/>
                        <path id="Vector_23" d="M292.401 308.407L310.284 312.766L308.24 321.149L282.586 314.896L282.734 314.285C283.237 312.224 284.538 310.447 286.351 309.344C288.163 308.242 290.34 307.905 292.401 308.407Z" fill="#3F3D56"/>
                        <path id="Vector_24" d="M285.648 315.172L295.247 316.614L295.2 316.925C295.043 317.974 294.475 318.918 293.622 319.548C292.768 320.178 291.7 320.444 290.65 320.286L288.963 320.033C287.913 319.875 286.97 319.307 286.34 318.454C285.709 317.601 285.444 316.532 285.601 315.483L285.648 315.172L285.648 315.172Z" fill="#3F3D56"/>
                        <path id="Vector_25" opacity="0.2" d="M308.24 318.992L294.829 315.723C294.427 316.541 293.776 317.211 292.969 317.635C292.162 318.059 291.242 318.216 290.34 318.082L289.273 317.922C288.224 317.763 287.271 317.22 286.598 316.4C285.924 315.58 285.578 314.54 285.625 313.48L283.341 312.923C283.01 313.547 282.756 314.21 282.586 314.896L285.625 315.637C285.578 316.697 285.924 317.737 286.598 318.557C287.271 319.377 288.224 319.92 289.273 320.079L290.34 320.24C291.242 320.373 292.162 320.216 292.969 319.792C293.776 319.368 294.427 318.698 294.829 317.88L308.24 321.149L310.284 312.766L309.787 312.645L308.24 318.992Z" fill="black"/>
                        <path id="Vector_26" d="M305.979 336.901C304.909 336.901 303.851 336.683 302.869 336.261C301.887 335.839 301.001 335.221 300.265 334.446C299.529 333.67 298.959 332.753 298.589 331.749C298.219 330.746 298.057 329.678 298.113 328.61L299.295 306.162L313.855 305.623V329.024C313.855 330.059 313.651 331.083 313.255 332.039C312.86 332.994 312.279 333.862 311.548 334.594C310.817 335.325 309.948 335.905 308.993 336.301C308.037 336.697 307.013 336.901 305.979 336.901Z" fill="#3F3D56"/>
                        <path id="Vector_27" d="M312.776 306.162H299.664C301.937 302.713 300.519 299.178 297.336 295.603C297.154 295.396 297.035 295.14 296.994 294.867C296.953 294.594 296.991 294.315 297.105 294.064C297.219 293.812 297.402 293.599 297.635 293.449C297.867 293.299 298.137 293.22 298.413 293.22H303.41C308.583 293.22 312.776 298.049 312.776 304.005V306.162Z" fill="#3F3D56"/>
                        <path id="Vector_28" opacity="0.2" d="M301.65 295.603C301.468 295.396 301.349 295.14 301.308 294.867C301.267 294.594 301.305 294.315 301.419 294.064C301.533 293.812 301.717 293.599 301.949 293.449C302.181 293.299 302.451 293.22 302.727 293.22H298.413C298.137 293.22 297.867 293.299 297.635 293.449C297.402 293.599 297.219 293.812 297.105 294.064C296.991 294.315 296.953 294.594 296.994 294.867C297.035 295.14 297.154 295.396 297.336 295.603C300.519 299.178 301.937 302.713 299.664 306.162H303.978C306.252 302.713 304.833 299.178 301.65 295.603Z" fill="black"/>
                        <path id="Vector_29" d="M264.242 333.665C263.138 333.667 262.077 334.093 261.278 334.854C260.48 335.616 260.004 336.656 259.95 337.759C259.709 337.537 259.435 337.353 259.139 337.214C259.954 336.66 260.554 335.844 260.843 334.902C261.131 333.96 261.089 332.948 260.723 332.033C260.358 331.118 259.692 330.355 258.834 329.87C257.976 329.385 256.979 329.208 256.006 329.367C255.034 329.526 254.145 330.012 253.487 330.745C252.828 331.478 252.439 332.413 252.385 333.397C252.33 334.381 252.613 335.353 253.186 336.155C253.759 336.956 254.589 337.537 255.538 337.803C255.169 338.155 254.889 338.589 254.721 339.07C254.552 339.55 254.499 340.064 254.566 340.569C254.634 341.074 254.82 341.556 255.109 341.975C255.398 342.394 255.782 342.739 256.23 342.982C256.678 343.225 257.177 343.358 257.687 343.371C258.196 343.384 258.701 343.277 259.161 343.057C259.62 342.838 260.022 342.513 260.332 342.109C260.643 341.705 260.853 341.233 260.946 340.733C261.411 341.289 262.009 341.719 262.684 341.982C263.359 342.246 264.09 342.335 264.808 342.241C265.527 342.147 266.21 341.873 266.795 341.445C267.379 341.017 267.846 340.448 268.153 339.791C268.459 339.134 268.595 338.411 268.547 337.688C268.499 336.964 268.27 336.265 267.88 335.654C267.49 335.043 266.952 334.541 266.316 334.193C265.68 333.845 264.967 333.664 264.242 333.665V333.665Z" fill="white"/>
                        <path id="Vector_30" d="M271.792 335.822C270.688 335.824 269.627 336.25 268.828 337.012C268.029 337.773 267.554 338.813 267.5 339.916C267.259 339.694 266.985 339.51 266.689 339.371C267.503 338.817 268.104 338.001 268.392 337.059C268.68 336.117 268.638 335.105 268.273 334.19C267.908 333.275 267.241 332.512 266.384 332.027C265.526 331.542 264.528 331.365 263.556 331.524C262.584 331.683 261.695 332.169 261.036 332.902C260.378 333.635 259.989 334.57 259.935 335.554C259.88 336.538 260.163 337.511 260.736 338.312C261.309 339.113 262.139 339.695 263.088 339.96C262.719 340.312 262.439 340.746 262.27 341.227C262.101 341.707 262.049 342.221 262.116 342.726C262.184 343.231 262.37 343.713 262.659 344.132C262.948 344.551 263.332 344.896 263.78 345.139C264.228 345.382 264.727 345.515 265.236 345.528C265.746 345.541 266.251 345.434 266.71 345.214C267.17 344.995 267.572 344.67 267.882 344.266C268.192 343.862 268.403 343.391 268.496 342.89C268.961 343.446 269.558 343.876 270.234 344.139C270.909 344.403 271.639 344.492 272.358 344.398C273.077 344.304 273.76 344.03 274.344 343.602C274.929 343.174 275.396 342.605 275.702 341.948C276.009 341.291 276.144 340.568 276.097 339.845C276.049 339.121 275.819 338.422 275.429 337.811C275.039 337.2 274.502 336.698 273.866 336.35C273.23 336.002 272.517 335.821 271.792 335.822V335.822Z" fill="white"/>
                        <g id="wash-hand-left">
                        <path id="Vector_31" d="M239.421 318.876L256.008 324.738C256.008 324.738 295.464 327.886 290.344 337.922C285.225 347.958 251.456 341.474 251.456 341.474L235.463 330.37L239.421 318.876Z" fill="#FFB8B8"/>
                        <path id="Vector_32" d="M251.494 318.404L236.481 343.199L204.912 322.006L168.651 297.674L146.789 240.274L124.56 199.57L152.419 191.363C152.419 191.363 162.007 191.729 174.4 214.476C186.781 237.233 197.815 276.621 197.815 276.621L212.623 288.151L251.494 318.404Z" fill="#3459E6"/>
                        <path id="Vector_33" opacity="0.2" d="M251.494 318.404L236.481 343.199L204.912 322.006L168.651 297.674L146.789 240.274L124.56 199.57L152.419 191.363C152.419 191.363 162.007 191.729 174.4 214.476C186.781 237.233 197.815 276.621 197.815 276.621L212.623 288.151L251.494 318.404Z" fill="black"/>
                        </g>
                        <path id="Vector_34" d="M225.324 180.179L182.623 162.096C182.623 162.096 162.225 146.356 150.26 157.993L144.888 165.674C144.888 165.674 112.168 183.264 112.168 197.769L115.878 271.164C115.878 271.164 105.329 312.042 121.152 314.679L206.863 322.591C206.863 322.591 218.731 308.086 208.182 289.625L212.138 246.11L225.324 180.179Z" fill="#3459E6"/>
                        <g id="wash-hand-right">
                        <path id="Vector_35" d="M321.437 347.46L282.976 346.543L279.924 343.081L277.767 340.632L275.405 337.958L272.784 334.992L277.249 328.068L279.374 324.767L287.981 330.419L294.085 334.42C294.085 334.42 299.198 336.124 305.281 338.691C310.932 341.086 317.436 344.235 321.437 347.46Z" fill="#FFB8B8"/>
                        <path id="Vector_36" d="M196.314 181.497L225.324 180.179C225.324 180.179 227.45 182.422 234.043 207.476C240.636 232.53 249.059 273.801 249.059 273.801L291.206 327.194L270.713 347.686L215.708 287.288L208.182 226.331L196.314 181.497Z" fill="#3459E6"/>
                        </g>
                        <path id="Vector_37" d="M210.819 319.954L116.014 311.612C116.014 311.612 106.647 371.38 107.966 395.116C109.284 418.851 110.603 455.773 110.603 455.773L100.054 616.646L140.932 611.371L146.206 478.189L163.348 405.665L183.128 497.969L196.314 616.646L231.917 612.69L220.05 468.959C220.05 468.959 230.599 339.733 210.819 319.954Z" fill="#2F2E41"/>
                        <path id="Vector_38" d="M224.005 606.097L235.873 610.053C235.873 610.053 260.927 603.459 254.334 620.602C247.741 637.744 229.28 635.107 229.28 635.107C229.28 635.107 206.863 652.249 197.633 639.063L202.907 611.371L224.005 606.097Z" fill="#2F2E41"/>
                        <path id="Vector_39" d="M127.745 606.097L139.613 610.053C139.613 610.053 164.667 603.459 158.074 620.602C151.481 637.744 133.02 635.107 133.02 635.107C133.02 635.107 110.603 652.249 101.373 639.063L106.647 611.371L127.745 606.097Z" fill="#2F2E41"/>
                        <g id="bubbles">
                        <g id="bubble4">
                        <path id="Vector_40" d="M320.326 347.686C322.113 347.686 323.562 346.238 323.562 344.451C323.562 342.664 322.113 341.215 320.326 341.215C318.539 341.215 317.091 342.664 317.091 344.451C317.091 346.238 318.539 347.686 320.326 347.686Z" fill="white"/>
                        <path id="Vector_41" d="M317.091 342.293C317.092 341.65 316.948 341.014 316.67 340.433C316.392 339.852 315.986 339.342 315.484 338.939C314.717 338.321 313.762 337.982 312.776 337.979C312.722 337.979 312.679 337.99 312.625 337.99C312.408 337.126 311.927 336.351 311.249 335.772C310.571 335.194 309.73 334.84 308.843 334.761C307.955 334.681 307.065 334.88 306.295 335.329C305.526 335.778 304.915 336.456 304.547 337.267C303.863 336.908 303.073 336.809 302.322 336.987C301.57 337.166 300.909 337.61 300.459 338.238C297.284 337.833 294.174 337.021 291.206 335.822C290.396 335.821 289.603 336.05 288.917 336.481C288.232 336.913 287.683 337.529 287.334 338.26C287.04 338.841 286.888 339.485 286.891 340.136C286.895 340.913 287.111 341.674 287.517 342.337C286.747 342.445 286.041 342.827 285.53 343.413C285.018 344 284.736 344.751 284.734 345.529C284.734 345.889 284.796 346.247 284.918 346.586L290.958 346.737C291.041 346.54 291.103 346.333 291.141 346.122C291.335 346.352 291.552 346.562 291.788 346.748L296.933 346.877L297.224 346.651C297.272 346.734 297.326 346.813 297.386 346.888L304.342 347.05C304.385 347.002 304.425 346.952 304.461 346.899C304.485 346.955 304.514 347.009 304.547 347.061L310.145 347.19C310.369 346.821 310.516 346.41 310.576 345.982C310.606 346.004 310.639 346.022 310.673 346.036C310.639 346.225 310.621 346.416 310.619 346.608C310.621 346.806 310.639 347.005 310.673 347.201L317.004 347.352C317.061 347.108 317.09 346.858 317.091 346.608C317.086 345.888 316.843 345.19 316.4 344.623C316.85 343.929 317.09 343.12 317.091 342.293V342.293ZM305.539 342.207C305.354 342.432 305.14 342.632 304.903 342.8C304.968 342.962 305 343.135 305.054 343.297C305.326 343.006 305.652 342.772 306.014 342.606C305.846 342.485 305.688 342.352 305.539 342.207V342.207Z" fill="white"/>
                        </g>
                        <g id="bubble3">
                        <path id="Vector_42" d="M349.447 348.765C351.234 348.765 352.682 347.316 352.682 345.529C352.682 343.742 351.234 342.293 349.447 342.293C347.66 342.293 346.211 343.742 346.211 345.529C346.211 347.316 347.66 348.765 349.447 348.765Z" fill="white"/>
                        <path id="Vector_43" d="M346.211 343.372C346.213 342.728 346.069 342.092 345.791 341.511C345.512 340.931 345.107 340.42 344.604 340.018C343.837 339.399 342.882 339.061 341.897 339.058C341.843 339.058 341.8 339.069 341.746 339.069C341.528 338.205 341.047 337.429 340.37 336.851C339.692 336.272 338.851 335.919 337.963 335.839C337.076 335.76 336.186 335.959 335.416 336.408C334.646 336.857 334.035 337.534 333.668 338.346C332.984 337.987 332.194 337.887 331.442 338.066C330.691 338.244 330.029 338.689 329.58 339.317C326.405 338.912 323.294 338.1 320.326 336.901C319.517 336.9 318.723 337.128 318.038 337.56C317.353 337.991 316.804 338.608 316.454 339.338C316.16 339.92 316.009 340.563 316.012 341.215C316.016 341.992 316.232 342.753 316.638 343.415C315.867 343.523 315.161 343.905 314.65 344.492C314.139 345.078 313.857 345.83 313.855 346.608C313.854 346.968 313.916 347.326 314.038 347.665L320.078 347.816C320.162 347.618 320.223 347.412 320.261 347.201C320.455 347.431 320.672 347.64 320.909 347.826L326.053 347.956L326.344 347.729C326.392 347.812 326.446 347.892 326.506 347.967L333.463 348.128C333.506 348.081 333.545 348.03 333.581 347.977C333.606 348.033 333.635 348.088 333.668 348.139L339.265 348.269C339.49 347.899 339.636 347.488 339.697 347.061C339.727 347.083 339.759 347.101 339.794 347.114C339.76 347.303 339.742 347.494 339.74 347.686C339.741 347.885 339.759 348.083 339.794 348.279L346.125 348.43C346.181 348.186 346.21 347.937 346.211 347.686C346.207 346.966 345.964 346.269 345.521 345.702C345.971 345.008 346.211 344.199 346.211 343.372V343.372ZM334.66 343.286C334.475 343.511 334.261 343.71 334.024 343.879C334.088 344.041 334.121 344.213 334.175 344.375C334.447 344.085 334.773 343.851 335.135 343.685C334.967 343.564 334.808 343.43 334.66 343.286H334.66Z" fill="white"/>
                        </g>
                        <g id="bubble2">
                        <path id="Vector_44" d="M302.8 346.608C304.14 346.608 305.227 345.521 305.227 344.181C305.227 342.841 304.14 341.754 302.8 341.754C301.46 341.754 300.373 342.841 300.373 344.181C300.373 345.521 301.46 346.608 302.8 346.608Z" fill="white"/>
                        <path id="Vector_45" d="M300.373 342.563C300.374 342.08 300.266 341.603 300.058 341.168C299.849 340.732 299.545 340.349 299.168 340.047C298.593 339.584 297.876 339.33 297.138 339.327C297.097 339.327 297.065 339.336 297.024 339.336C296.861 338.687 296.5 338.106 295.992 337.672C295.484 337.238 294.853 336.973 294.187 336.914C293.522 336.854 292.854 337.003 292.277 337.34C291.699 337.677 291.241 338.185 290.966 338.794C290.453 338.524 289.86 338.45 289.296 338.583C288.733 338.717 288.237 339.05 287.9 339.522C285.518 339.218 283.186 338.609 280.959 337.71C280.352 337.709 279.757 337.88 279.243 338.204C278.729 338.527 278.317 338.99 278.055 339.538C277.835 339.974 277.721 340.456 277.724 340.945C277.727 341.528 277.889 342.099 278.193 342.595C277.615 342.676 277.086 342.963 276.702 343.403C276.319 343.843 276.107 344.406 276.106 344.99C276.106 345.26 276.152 345.528 276.243 345.782L280.773 345.896C280.836 345.748 280.882 345.593 280.911 345.435C281.056 345.607 281.219 345.764 281.396 345.904L285.255 346.001L285.473 345.831C285.509 345.893 285.549 345.953 285.594 346.009L290.812 346.13C290.844 346.095 290.874 346.057 290.901 346.017C290.919 346.059 290.941 346.1 290.966 346.138L295.164 346.236C295.332 345.959 295.442 345.65 295.487 345.329C295.51 345.346 295.534 345.36 295.56 345.37C295.535 345.511 295.521 345.655 295.52 345.799C295.521 345.948 295.534 346.097 295.56 346.244L300.308 346.357C300.351 346.174 300.373 345.987 300.373 345.799C300.37 345.259 300.188 344.735 299.855 344.31C300.193 343.79 300.373 343.183 300.373 342.563V342.563ZM291.71 342.498C291.571 342.667 291.411 342.817 291.233 342.943C291.281 343.065 291.305 343.194 291.346 343.315C291.55 343.098 291.794 342.922 292.066 342.798C291.94 342.707 291.821 342.607 291.71 342.498V342.498Z" fill="white"/>
                        </g>
                        <g id="bubble1">
                        <path id="Vector_46" d="M268.287 346.608C269.627 346.608 270.713 345.521 270.713 344.181C270.713 342.841 269.627 341.754 268.287 341.754C266.946 341.754 265.86 342.841 265.86 344.181C265.86 345.521 266.946 346.608 268.287 346.608Z" fill="white"/>
                        <path id="Vector_47" d="M265.86 342.563C265.861 342.08 265.753 341.603 265.545 341.168C265.336 340.732 265.032 340.349 264.655 340.047C264.079 339.584 263.363 339.33 262.624 339.327C262.584 339.327 262.551 339.336 262.511 339.336C262.348 338.687 261.987 338.106 261.479 337.672C260.97 337.238 260.34 336.973 259.674 336.914C259.008 336.854 258.341 337.003 257.763 337.34C257.186 337.677 256.728 338.185 256.452 338.794C255.94 338.524 255.347 338.45 254.783 338.583C254.22 338.717 253.724 339.05 253.387 339.522C251.005 339.218 248.672 338.609 246.446 337.71C245.839 337.709 245.244 337.88 244.73 338.204C244.216 338.527 243.804 338.99 243.542 339.538C243.322 339.974 243.208 340.456 243.211 340.945C243.213 341.528 243.376 342.099 243.68 342.595C243.102 342.676 242.573 342.963 242.189 343.403C241.806 343.843 241.594 344.406 241.593 344.99C241.592 345.26 241.639 345.528 241.73 345.782L246.26 345.896C246.323 345.748 246.369 345.593 246.398 345.435C246.543 345.607 246.706 345.764 246.883 345.904L250.741 346.001L250.96 345.831C250.996 345.893 251.036 345.953 251.081 346.009L256.299 346.13C256.331 346.095 256.361 346.057 256.388 346.017C256.406 346.059 256.428 346.1 256.452 346.138L260.651 346.236C260.819 345.959 260.929 345.65 260.974 345.329C260.997 345.346 261.021 345.36 261.047 345.37C261.021 345.511 261.008 345.655 261.006 345.799C261.008 345.948 261.021 346.097 261.047 346.244L265.795 346.357C265.838 346.174 265.859 345.987 265.86 345.799C265.857 345.259 265.675 344.735 265.342 344.31C265.68 343.79 265.86 343.183 265.86 342.563V342.563ZM257.197 342.498C257.058 342.667 256.897 342.817 256.719 342.943C256.768 343.065 256.792 343.194 256.833 343.315C257.037 343.098 257.281 342.922 257.552 342.798C257.427 342.707 257.308 342.607 257.197 342.498V342.498Z" fill="white"/>
                        </g>
                        </g>
                        <path id="Vector_48" d="M381.533 311.49V305.019H376.141V306.097C375.545 306.097 375.062 306.822 375.062 307.715C375.062 308.609 375.545 309.333 376.141 309.333V311.49H371.826V333.061H385.847V311.49H381.533Z" fill="#3F3D56"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="426.562" height="657.227" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>                        
                </div>
                <div class="col">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#why-note">Why Take Notes?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#benefits">What Is The Benefit?</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active show" id="why-note">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis excepturi nihil unde, minima iure aliquam, veniam quae, voluptate distinctio dolorem nulla! Atque voluptatem mollitia rem quis totam, culpa ea earum pariatur obcaecati nisi nobis, quos, tempora ut numquam nesciunt?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque eaque perferendis, tempora praesentium quasi consequatur laudantium ducimus dolore quo sint voluptatum beatae. Eaque fugiat culpa incidunt distinctio quidem voluptates sint.</p>
                        </div>
                        <div class="tab-pane fade" id="benefits">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nemo ut quas harum voluptatum ratione aspernatur laudantium aliquam quia sequi.</p>
                            <ul>
                                <li class="text-success"><b>Train prioritizing skills</b></li>
                                <li class="text-primary"><b>Improve organizing skills</b></li>
                                <li class="text-orange"><b>Increase creativity</b></li>
                                <li class="text-danger"><b>Improve comprehension</b></li>
                                <li class="text-cyan"><b>Assert discipline</b></li>
                            </ul>
                            <p>Start taking notes <a href="{{url('/notes')}}">now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
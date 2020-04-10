@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container my-5">
        <h1 class="text-center">Family Chat with Miss Misty - Saturday :)</h1>
        <p>
            Hello!!
            <br><br>
            Mark your calendars for Saturday night! Put the kiddos to bed, grab a cup of tea and join me for a MDU Family Chat Saturday night at 8pm!
            <br><br>
            Learn more about the new distance learning platform the teachers have put together and get a preview!
            <br><br>
            <strong>When:</strong> Mar 21, 2020 08:00 PM
            <br><br>
            <a href="https://zoom.us/meeting/register/uJUpdemtqjgqKUFj6D6TnWuXNdduAGw4Qg" target="_blank">Register in advance for this meeting</a>
            <br><br>
            After registering, you will receive a confirmation email containing information about joining the call.
            <br><br>
            <a href="https://zoom.us/meeting/register/uJUpdemtqjgqKUFj6D6TnWuXNdduAGw4Qg" target="_blank"><img src="images/mdu-family-chat.jpg" alt="" style="max-width: 400px;"></a>
            <br><br>
            I appreciate you all,
            <br>Miss Misty
        <div class="covid-calendar mb-5">
            <h1 class="text-center mt-5">March 2020</h1>
            <div class="table-responsive">
                <table class="table d-flex justify-content-start justify-content-md-center" id="covid-table">
                    <tr>
                        <td>Sunday</td>
                        <td>Monday</td>
                        <td>Tuesday</td>
                        <td>Wednesday</td>
                        <td>Thursday</td>
                        <td>Friday</td>
                        <td>Saturday</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                    </tr>
                    <tr id="yellow-week">
                        <div id="spring-break-week">
                            <div id="spring-break-text">CLASSES CLOSED FOR SPRING BREAK</div>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>
                            <td>20</td>
                            <td>21</td>
                        </div>
                    </tr>
                    <tr id="turquoise-week">
                        <div id="suspension-week">
                            <div id="suspension-week-text">CLASSES TEMPORARILY SUSPENDED <small>covered by extra week of classes built into our schedule</small></div>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                        </div>
                    </tr>
                    <tr id="violet-week">
                        <div id="makeup-week">
                            <div id="makeup-week-text">CLASSES TEMPORARILY SUSPENDED <small>covered by extra week of make up classes offered after recital</small></div>
                            <td>29</td>
                            <td>30</td>
                            <td>31</td>
                            <td id="white-calendar-block"></td>
                            <td id="white-calendar-block"></td>
                            <td id="white-calendar-block"></td>
                            <td id="white-calendar-block"></td>
                        </div>
                    </tr>
                </table>
            </div>
            <h1 class="text-center mt-5">April 2020</h1>
            <div class="table-responsive">
                <table class="table d-flex justify-content-start justify-content-md-center" id="covid-table">
                    <tr>
                        <td>Sunday</td>
                        <td>Monday</td>
                        <td>Tuesday</td>
                        <td>Wednesday</td>
                        <td>Thursday</td>
                        <td>Friday</td>
                        <td>Saturday</td>
                    </tr>
                    <tr id="violet-week">
                        <div id="makeup-week-april">
                            <div id="makeup-week-april-text">CLASSES TEMPORARILY SUSPENDED <small>covered by extra week of make up classes offered after recital</small></div>
                            <td id="white-calendar-block"></td>
                            <td id="white-calendar-block"></td>
                            <td id="white-calendar-block"></td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </div>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>6<br><strong>Classes Resume!</strong></td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                    </tr>
                </table>
            </div>
        </div>
        </p>
    </div>

@endsection

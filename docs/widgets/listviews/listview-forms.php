<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listview Forms - jQuery Mobile Demos</title>
	<link rel="stylesheet"  href="../../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../../_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../../favicon.ico">

	<script src="../../../js/jquery.js"></script>
	<script src="../../_assets/js/"></script>
	<script src="../../../js/"></script>
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="true">

	<div data-role="header" class="jqm-header">
		<h1>Listview Forms</h1>
		<a href="#" class="jqm-search-link" data-icon="search" data-iconpos="notext">Search</a>
		<?php include( '../../search.php' ); ?>
	</div><!-- /header -->

	<div data-role="content" class="jqm-content">

			<h2>Non-inset</h2>

			<div data-demo-html="true">
				<form>
					<ul data-role="listview">
                        <li data-role="fieldcontain">
                            <label for="name">Text Input:</label>
                            <input type="text" name="name" id="name" value="">
                        </li>
                        <li data-role="fieldcontain">
                            <label for="textarea">Textarea:</label>
                        <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
                        </li>
                        <li data-role="fieldcontain">
                            <label for="search">Search Input:</label>
                            <input type="search" name="search" id="search" value="">
                        </li>
                        <li data-role="fieldcontain">
                            <label for="flip">Flip switch:</label>
                            <select name="flip" id="flip" data-role="slider">
                                <option value="off">Off</option>
                                <option value="on">On</option>
                            </select>
                        </li>
                        <li data-role="fieldcontain">
                            <label for="slider">Slider:</label>
                            <input type="range" name="slider" id="slider" value="0" min="0" max="100">
                        </li>
                        <li data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <legend>Choose as many snacks as you'd like:</legend>
                                <input type="checkbox" name="checkbox-1a" id="checkbox-1a" class="custom">
                                <label for="checkbox-1a">Cheetos</label>
                                <input type="checkbox" name="checkbox-2a" id="checkbox-2a" class="custom">
                                <label for="checkbox-2a">Doritos</label>
                                <input type="checkbox" name="checkbox-3a" id="checkbox-3a" class="custom">
                                <label for="checkbox-3a">Fritos</label>
                                <input type="checkbox" name="checkbox-4a" id="checkbox-4a" class="custom">
                                <label for="checkbox-4a">Sun Chips</label>
                            </fieldset>
                        </li>
                        <li data-role="fieldcontain">
                            <fieldset data-role="controlgroup" data-type="horizontal">
                                <legend>Font styling:</legend>
                                <input type="checkbox" name="checkbox-6a" id="checkbox-6a" class="custom">
                                <label for="checkbox-6a">b</label>
                                <input type="checkbox" name="checkbox-7a" id="checkbox-7a" class="custom">
                                <label for="checkbox-7a"><em>i</em></label>
                                <input type="checkbox" name="checkbox-8a" id="checkbox-8a" class="custom">
                                <label for="checkbox-8a">u</label>
                            </fieldset>
                        </li>
                        <li data-role="fieldcontain">
                             <fieldset data-role="controlgroup">
                                <legend>Choose a pet:</legend>
                                    <input type="radio" name="radio-choice-1a" id="radio-choice-1a" value="choice-1" checked="checked">
                                    <label for="radio-choice-1a">Cat</label>
                                    <input type="radio" name="radio-choice-1a" id="radio-choice-2a" value="choice-2">
                                    <label for="radio-choice-2a">Dog</label>
                                    <input type="radio" name="radio-choice-1a" id="radio-choice-3a" value="choice-3">
                                    <label for="radio-choice-3a">Hamster</label>
                                    <input type="radio" name="radio-choice-1a" id="radio-choice-4a" value="choice-4">
                                    <label for="radio-choice-4a">Lizard</label>
                            </fieldset>
                        </li>
                        <li data-role="fieldcontain">
                            <fieldset data-role="controlgroup" data-type="horizontal">
                                <legend>Layout view:</legend>
                                    <input type="radio" name="radio-choice-2a" id="radio-choice-5a" value="on" checked="checked">
                                    <label for="radio-choice-5a">List</label>
                                    <input type="radio" name="radio-choice-2a" id="radio-choice-6a" value="off">
                                    <label for="radio-choice-6a">Grid</label>
                            </fieldset>
                        </li>
                        <li data-role="fieldcontain">
                            <label for="select-choice-1" class="select">Choose shipping method:</label>
                            <select name="select-choice-1" id="select-choice-1">
                                <option value="standard">Standard: 7 day</option>
                                <option value="rush">Rush: 3 days</option>
                                <option value="express">Express: next day</option>
                                <option value="overnight">Overnight</option>
                            </select>
                        </li>
                        <li data-role="fieldcontain">
                            <label for="select-choice-3" class="select">Your state:</label>
                            <select name="select-choice-3" id="select-choice-3">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </li>
                        <li data-role="fieldcontain">
                            <label for="select-choice-a" class="select">Choose shipping method:</label>
                            <select name="select-choice-a" id="select-choice-a" data-native-menu="false">
                                <option>Custom menu example</option>
                                <option value="standard">Standard: 7 day</option>
                                <option value="rush">Rush: 3 days</option>
                                <option value="express">Express: next day</option>
                                <option value="overnight">Overnight</option>
                            </select>
                        </li>
                        <li class="ui-body ui-body-b">
                            <fieldset class="ui-grid-a">
                                    <div class="ui-block-a"><button type="submit" data-theme="d">Cancel</button></div>
                                    <div class="ui-block-b"><button type="submit" data-theme="a">Submit</button></div>
                            </fieldset>
                        </li>
					</ul>
				</form>
			</div><!--/demo-html -->

			<h2>Inset</h2>

			<div data-demo-html="true">
				<form>
					<ul data-role="listview" data-inset="true">
                        <li data-role="fieldcontain">
                            <label for="name2">Text Input:</label>
                            <input type="text" name="name2" id="name2" value="">
                        </li>
                        <li data-role="fieldcontain">
                            <label for="textarea2">Textarea:</label>
                        <textarea cols="40" rows="8" name="textarea2" id="textarea2"></textarea>
                        </li>
                        <li data-role="fieldcontain">
                            <label for="search2">Search Input:</label>
                            <input type="search" name="search2" id="search2" value="">
                        </li>
                        <li data-role="fieldcontain">
                            <label for="flip2">Flip switch:</label>
                            <select name="flip2" id="flip2" data-role="slider">
                                <option value="off">Off</option>
                                <option value="on">On</option>
                            </select>
                        </li>
                        <li data-role="fieldcontain">
                            <label for="slider2">Slider:</label>
                            <input type="range" name="slider2" id="slider2" value="0" min="0" max="100">
                        </li>
                        <li data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <legend>Choose as many snacks as you'd like:</legend>
                                <input type="checkbox" name="checkbox-1b" id="checkbox-1b" class="custom">
                                <label for="checkbox-1b">Cheetos</label>
                                <input type="checkbox" name="checkbox-2b" id="checkbox-2b" class="custom">
                                <label for="checkbox-2b">Doritos</label>
                                <input type="checkbox" name="checkbox-3b" id="checkbox-3b" class="custom">
                                <label for="checkbox-3b">Fritos</label>
                                <input type="checkbox" name="checkbox-4b" id="checkbox-4b" class="custom">
                                <label for="checkbox-4b">Sun Chips</label>
                            </fieldset>
                        </li>
                        <li data-role="fieldcontain">
                            <fieldset data-role="controlgroup" data-type="horizontal">
                                <legend>Font styling:</legend>
                                <input type="checkbox" name="checkbox-6b" id="checkbox-6b" class="custom">
                                <label for="checkbox-6b">b</label>
                                <input type="checkbox" name="checkbox-7b" id="checkbox-7b" class="custom">
                                <label for="checkbox-7b"><em>i</em></label>
                                <input type="checkbox" name="checkbox-8b" id="checkbox-8b" class="custom">
                                <label for="checkbox-8b">u</label>
                            </fieldset>
                        </li>
                        <li data-role="fieldcontain">
                             <fieldset data-role="controlgroup">
                                <legend>Choose a pet:</legend>
                                    <input type="radio" name="radio-choice-1b" id="radio-choice-1b" value="choice-1" checked="checked">
                                    <label for="radio-choice-1b">Cat</label>
                                    <input type="radio" name="radio-choice-1b" id="radio-choice-2b" value="choice-2">
                                    <label for="radio-choice-2b">Dog</label>
                                    <input type="radio" name="radio-choice-1b" id="radio-choice-3b" value="choice-3">
                                    <label for="radio-choice-3b">Hamster</label>
                                    <input type="radio" name="radio-choice-1b" id="radio-choice-4b" value="choice-4">
                                    <label for="radio-choice-4b">Lizard</label>
                            </fieldset>
                        </li>
                        <li data-role="fieldcontain">
                            <fieldset data-role="controlgroup" data-type="horizontal">
                                <legend>Layout view:</legend>
                                    <input type="radio" name="radio-choice-2b" id="radio-choice-5b" value="on" checked="checked">
                                    <label for="radio-choice-5b">List</label>
                                    <input type="radio" name="radio-choice-2b" id="radio-choice-6b" value="off">
                                    <label for="radio-choice-6b">Grid</label>
                            </fieldset>
                        </li>
                        <li data-role="fieldcontain">
                            <label for="select-choice-1" class="select">Choose shipping method:</label>
                            <select name="select-choice-1" id="select-choice-1">
                                <option value="standard">Standard: 7 day</option>
                                <option value="rush">Rush: 3 days</option>
                                <option value="express">Express: next day</option>
                                <option value="overnight">Overnight</option>
                            </select>
                        </li>
                        <li data-role="fieldcontain">
                            <label for="select-choice-3" class="select">Your state:</label>
                            <select name="select-choice-3" id="select-choice-3">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </li>
                        <li data-role="fieldcontain">
                            <label for="select-choice-a" class="select">Choose shipping method:</label>
                            <select name="select-choice-a" id="select-choice-a" data-native-menu="false">
                                <option>Custom menu example</option>
                                <option value="standard">Standard: 7 day</option>
                                <option value="rush">Rush: 3 days</option>
                                <option value="express">Express: next day</option>
                                <option value="overnight">Overnight</option>
                            </select>
                        </li>
                        <li class="ui-body ui-body-b">
                            <fieldset class="ui-grid-a">
                                    <div class="ui-block-a"><button type="submit" data-theme="d">Cancel</button></div>
                                    <div class="ui-block-b"><button type="submit" data-theme="a">Submit</button></div>
                            </fieldset>
                        </li>
					</ul>
				</form>
			</div><!--/demo-html -->

			</div><!-- /content -->

			<div data-role="footer" class="jqm-footer">
				<p class="jqm-version"></p>
				<p>Copyright 2013 The jQuery Foundation</p>
			</div><!-- /footer -->

		<?php include( '../../global-nav.php' ); ?>

		</div><!-- /page -->
		</body>
		</html>


//we can set animation delay as following in ms (default 1000)
ProgressBar.singleStepAnimation = 1000;
ProgressBar.init(
  [ 'Search','Select Flight',
  'Passenger Details',
  'Payment Method',
  'Confirmation'
],
'Payment Method',
'progress-bar-wrapper' // created this optional parameter for container name (otherwise default container created)
);
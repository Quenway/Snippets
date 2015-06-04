var gaevent = function(category, action, label, value) {
  //console.log('Analytics Event - Category: ' + category + ', Action: ' + action + ', Label: ' + label + ', Value: ' + value);
  ga('send', 'event', {
    'eventCategory': category,
    'eventAction': action,
    'eventLabel' : label,
    'eventValue': value
  }); 
}

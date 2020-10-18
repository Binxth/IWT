

function inboxMsg()
{
  var txt;
  if (confirm("You have 03 unread messages.")) {
    txt = "You read all the messages";
  } else {
    txt = "Reminder: You have 03 unread messages";
  }
  document.getElementById("txtNotification").innerHTML = txt;

}
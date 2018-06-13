function genOutput()
{
    var output = document.getElementsByName('users');

  for(var i = 0;i<output.length;i++)
        if(output[i].checked)
         {
           if(output[i].value == 'coaching')
              location.href = "{{ url('startexam') }}";
         }

  }

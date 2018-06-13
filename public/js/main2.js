  var template = _.template(
            $( "#includedContent .template" ).html()
        );

  var subjectTrackTpl = _.template(
            $( "#includedContent .trackTpl" ).html()
        );

        var submitPaperTpl = _.template(
                  $( "#includedContent .submitPaperTpl" ).html()
              );

var Exam={
    subject:"physics",
    qNo:1,
    getId:function(){
      return "rid"+this.qNo;
    },
    getName:function(){
        return this.subject+"_rid"+this.qNo;
    },//NEED TO CHECK
     markQuestion:function(){
        this.getSubjectData()["rid"+(this.qNo)].status="markR";
        this.drawSubjectTrack();
        if(this.getSubjectData()["rid"+(this.qNo+1)]!==undefined)
        {this.qNo++}
        this.render();
    },
    getNextQuestion:function(){
        var myanswer = (answers[Exam.subject]["rid"+(this.qNo)]!=null);
        this.getSubjectData()["rid"+(this.qNo)].status=myanswer?"Ansd":"NAnsd";
        this.drawSubjectTrack();
        if(this.getSubjectData()["rid"+(this.qNo+1)]!==undefined)
        {this.qNo++}
        this.render();
    },
     setAnswer:function(value){
        this.getSubjectData()["rid"+(this.qNo)].selectedAnswed=value;
     },
    getPrevQuestion:function(){
        if(this.qNo>1)
        {this.qNo--}
        this.render();
    },
    getSubjectData:function(){
        return questions[Exam.subject].data;
    },
     setSubject:function(sub){
       Exam.subject=sub;

        this.qNo=1;
       this.render();
    this.drawSubjectTrack();
    },
    render:function(){
      var myQ=Exam.getSubjectData()[Exam.getId()];
      var myName=Exam.getName();
      var myQNO=Exam.qNo;
      var x={"Q":myQ,"name":myName,"qNo":myQNO};
        $("#start").html(template(x));
    },
    drawSubjectTrack:function(){
        $("#subjectTrack").html(subjectTrackTpl({
            Q:Exam.getSubjectData(),
            subject:Exam.subject}));
    },
    openQuestion:function(qNo){
        this.qNo=qNo;
        console.log(qNo);
        this.render();
    },
    submitPaper:function(){
      var x={"Q":questions};
        $("#submitPaper").html(submitPaperTpl(x));
        $("#submitPaper").submit();
    }
};


Exam.drawSubjectTrack();
  Exam.render();

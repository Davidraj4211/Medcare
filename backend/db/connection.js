const dbConfig=require("./config").default;
const  mongoose=require("mongoose");
mongoose.connect(dbConfig.url);              
module.exports=mongoose;
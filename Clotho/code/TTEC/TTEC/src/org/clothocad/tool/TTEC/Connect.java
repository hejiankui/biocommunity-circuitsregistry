/*Copyright (c) 2010 Clotho Software Team
All rights reserved.

Permission is hereby granted, without written agreement and without
license or royalty fees, to use, copy, modify, and distribute this
software and its documentation for any purpose, provided that the above
copyright notice and the following two paragraphs appear in all copies
of this software.
 	
IN NO EVENT SHALL THE CLOTHO DEVELOPERS BE LIABLE TO ANY PARTY
FOR DIRECT, INDIRECT, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGES
ARISING OUT OF THE USE OF THIS SOFTWARE AND ITS DOCUMENTATION, EVEN IF
THE CLOTHO DEVELOPERS HAVE BEEN ADVISED OF THE POSSIBILITY OF
SUCH DAMAGE.
 	
THE CLOTHO DEVELOPERS SPECIFICALLY DISCLAIMS ANY WARRANTIES,
INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. THE SOFTWARE
PROVIDED HEREUNDER IS ON AN "AS IS" BASIS, AND THE CLOTHO DEVELOPERS 
HAVE NO OBLIGATION TO PROVIDE MAINTENANCE, SUPPORT, UPDATES,
ENHANCEMENTS, OR MODIFICATIONS.*/

package org.clothocad.tool.TTEC;

import org.openide.filesystems.FileObject;
import org.openide.filesystems.FileUtil;
import java.io.*;
import java.net.URL;
import org.clothocore.api.data.ObjBase;
import org.clothocore.api.plugin.ClothoTool;
import org.openide.util.Exceptions;


public class Connect implements ClothoTool {

    @Override
    public void launch() {
        
//     System.out.println("Launched called for TTEC");
//       Runtime rn = Runtime.getRuntime();
//       Process p = null;
//  //      File fo = new File("org/clothocad/tool/TTEC/TTEC1.4.exe");
//       FileObject fo = FileUtil.getConfigFile("org/clothocad/tool/TTEC/TTEC.exe");
//        try {
//            p = rn.exec(fo.getPath());
//        } catch (IOException ex) {
//            Exceptions.printStackTrace(ex);
        new TTEC();
        
    }
    @Override
    public void launch(ObjBase o) {
  
        launch();
    }
   
    public void close() {
       
    }


    public void init() {

   }


    }
 


    



    


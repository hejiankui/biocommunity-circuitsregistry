/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.clothocad.tool.TTEC;

import java.io.File;
import java.io.IOException;
import org.openide.filesystems.FileObject;
import org.openide.filesystems.FileUtil;
import org.openide.util.Exceptions;

/**
 *
 * @author toshiba
 */
public class TTEC {
      TTEC(){
      System.out.println("Launched called for TTEC");
 
        Runtime rn = Runtime.getRuntime();
       
        Process p = null;
        try {
            p = rn.exec("src/org/clothocad/tool/TTEC//TTEC.exe");

	  } catch (Exception e) {
	 
              System.out.println("- -");
          }
     }
              
}
     
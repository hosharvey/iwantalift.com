#e-Paper_HAT input code
import sys
import os
picdir = os.path.join(os.path.dirname(os.path.dirname(os.path.realpath(__file__))), 'pic')
libdir = os.path.join(os.path.dirname(os.path.dirname(os.path.realpath(__file__))), 'lib')
if os.path.exists(libdir):
    sys.path.append(libdir)

import logging
from waveshare_epd import epd7in5
import time
from PIL import Image,ImageDraw,ImageFont
import traceback

logging.basicConfig(level=logging.DEBUG)
x1=input("Line 1: ")
x2=input("Line 2: ")
x3=input("Line 3: ")
x4=input("Line 4: ")
x5=input("Line 5: ")
y1=input("Line 6: ")
y2=input("Line 7: ")
y3=input("Line 8: ")
y4=input("Line 9: ")
y5=input("Line 10: ")
a1=len(y1)*12
a2=len(y2)*12
a3=len(y3)*12
a4=len(y4)*12
a5=len(y5)*12

try:
    logging.info("epd7in5 Demo")
    
    epd = epd7in5.EPD()
    logging.info("init and Clear")
    epd.init()
    epd.Clear()
    
    font30 = ImageFont.truetype(os.path.join(picdir, 'Font.ttc'), 30)
    font18 = ImageFont.truetype(os.path.join(picdir, 'Font.ttc'), 18)
    font40 = ImageFont.truetype(os.path.join(picdir, 'Font.ttc'), 40)
    
    
    # Drawing on the Vertical image
    logging.info("2.Drawing on the Vertical image...")
    Limage = Image.new('1', (epd.height, epd.width), 255)  # 255: clear the frame
    draw = ImageDraw.Draw(Limage)
    draw.text((45, 20), 'IWantALift.com', font = font40, fill = 0)
    draw.text((2, 90), '- '+x1, font = font30, fill = 0)
    draw.text((2, 200), '- '+x2, font = font30, fill = 0)
    draw.text((2, 310), '- '+x3, font = font30, fill = 0)
    draw.text((2, 420), '- '+x4, font = font30, fill = 0)
    draw.text((2, 530), '- '+x5, font = font30, fill = 0)
    draw.text((350-a1, 90), y1+' -', font = font30, fill = 0)
    draw.text((350-a2, 200), y2+' -', font = font30, fill = 0)
    draw.text((350-a3, 310), y3+' -', font = font30, fill = 0)
    draw.text((350-a4, 420), y4+' -', font = font30, fill = 0)
    draw.text((350-a5, 530), y5+' -', font = font30, fill = 0)
    epd.display(epd.getbuffer(Limage))
    time.sleep(2)
    
    
    logging.info("Goto Sleep...")
    epd.sleep()
    
except IOError as e:
    logging.info(e)
    
except KeyboardInterrupt:    
    logging.info("ctrl + c:")
    epd7in5.epdconfig.module_exit()
    exit()

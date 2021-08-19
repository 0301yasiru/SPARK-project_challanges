# !usr/bin/python


def read_config():
    with open('config.txt', 'r') as config_file:
        content = config_file.readlines()

    device_log = {} # this dictionary will hold the configuration data extracted
    config_level = "" # this will hold the configuration level

    for line in content:
        line = line[:-1] # remove the new line character from the string

        if(line == "[FORCELOG]" or line == "[SHEDULE]"): config_level = line #look for the configuration level and update it

        if(config_level == '[FORCELOG]'):
            temp = line.split("=") # split the line by =
            if(len(temp) <= 1): continue # it is only worth only if split has two components

            device_log[temp[0]] = [int(temp[1]), "", ""] # build the dictionary

        if(config_level == '[SHEDULE]'):
            temp = line.split("=") # split the line by =
            if(len(temp) <= 1): continue # it is only worth only if split has two components
        
            device_log[temp[0]][1] = temp[1].split("-->")[0] # add start time
            device_log[temp[0]][2] = temp[1].split("-->")[1] # add start time

    return device_log


def main():
    print(read_config())


if __name__ == "__main__":
    main()